<?php

namespace Baywet\Githubtododemo\Githubauthentication;

use Http\Promise\FulfilledPromise;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Kiota\Abstractions\Authentication\AccessTokenProvider;
use Microsoft\Kiota\Abstractions\Authentication\AllowedHostsValidator;
use GuzzleHttp\Client;

class GitHubAccessTokenProvider implements AccessTokenProvider
{
	private AllowedHostsValidator $allowedHostsValidator;
	private Client $client;
	private string $clientId;
	private string $scope;
	public function __construct(string $clientId, string $scope, array $allowedHosts = ["api.github.com"]) {
		$this->allowedHostsValidator = new AllowedHostsValidator();
        $this->allowedHostsValidator->setAllowedHosts($allowedHosts);
		$this->client = new Client();
		$this->clientId = $clientId;
		$this->scope = $scope;
	}

	public function getAllowedHostsValidator(): AllowedHostsValidator
    {
        return $this->allowedHostsValidator;
    }
	public function getAuthorizationTokenAsync(string $url, array $additionalAuthenticationContext = []): Promise
    {
        $parsedUrl = parse_url($url);
        $scheme = $parsedUrl["scheme"] ?? null;
        $host = $parsedUrl["host"] ?? null;
        try {
            if ($scheme !== 'https' || !$this->getAllowedHostsValidator()->isUrlHostValid($url)) {
                return new FulfilledPromise(null);
            }
			$deviceCodeResponse = $this->getDeviceCode();
			if(!$deviceCodeResponse) {
				return new RejectedPromise(new \Exception("Error getting device code"));
			}
			echo "Go to " . $deviceCodeResponse->verification_uri . " and enter " . $deviceCodeResponse->user_code . " to authenticate\n";
			$tokenResponse = $this->pollForToken($deviceCodeResponse);
			if(!$tokenResponse) {
				return new RejectedPromise(new \Exception("Error getting token"));
			}
			return new FulfilledPromise($tokenResponse->access_token);
		}
		catch (\Exception $ex) {
			return new RejectedPromise($ex);
		}
	}
	private function pollForToken(GitHubDeviceCodeResponse $deviceCodeResponse)
	{
		$result = $this->getToken($deviceCodeResponse);
		if ($result !== null) {
			return $result;
		} else {
			sleep($deviceCodeResponse->interval_in_seconds + 1);
			return $this->pollForToken($deviceCodeResponse);
		}

	}
	private function getToken(GitHubDeviceCodeResponse $deviceCodeResponse)
	{
		$response = $this->client->post("https://github.com/login/oauth/access_token", [
			"form_params" => [
				"client_id" => $this->clientId,
				"device_code" => $deviceCodeResponse->device_code,
				"grant_type" => "urn:ietf:params:oauth:grant-type:device_code"
			],
			"headers" => [
				"Accept" => "application/json"
			]
		]);
		if ($response->getStatusCode() !== 200) {
			throw new \Exception("Error getting token: " . $response->getStatusCode() . " " . $response->getBody());
		}
		$body = $response->getBody()->getContents();
		$result = GitHubAccessTokenCodeResponse::fromJson($body);
		if ("authorization_pending" === $result->error) {
			return null;
		} else if ($result->error !== "" && $result->error !== null) {
			throw new \Exception("Error getting token: " . $result->error . " " . $result->error_description);
		}
		return $result;
	}
	private function getDeviceCode()
	{
		$response = $this->client->post("https://github.com/login/device/code", [
			"form_params" => [
				"client_id" => $this->clientId,
				"scope" => $this->scope
			],
			"headers" => [
				"Accept" => "application/json"
			]
		]);
		if ($response->getStatusCode() !== 200) {
			throw new \Exception("Error getting device code: " . $response->getStatusCode() . " " . $response->getBody());
		}
		$body = $response->getBody()->getContents();
		return GitHubDeviceCodeResponse::fromJson($body);

	}
}