<?php
namespace Baywet\Githubtododemo\Githubauthentication;


class GitHubAccessTokenCodeResponse
{
	public string $access_token;
	public string $token_type;
	public string $scope;
	public string $error = "";
	public string $error_description;
	public string $error_uri;
	public static function fromJson($jsonPayload)
	{
		$jsonPayload = json_decode($jsonPayload, true);
		$instance = new GitHubAccessTokenCodeResponse();
		if (array_key_exists("access_token", $jsonPayload)) {
			$instance->access_token = $jsonPayload["access_token"];
		}
		if (array_key_exists("token_type", $jsonPayload)) {
			$instance->token_type = $jsonPayload["token_type"];
		}
		if (array_key_exists("scope", $jsonPayload)) {
			$instance->scope = $jsonPayload["scope"];
		}
		if (array_key_exists("error", $jsonPayload)) {
			$instance->error = $jsonPayload["error"];
		}
		if (array_key_exists("error_description", $jsonPayload)) {
			$instance->error_description = $jsonPayload["error_description"];
		}
		if (array_key_exists("error_uri", $jsonPayload)) {
			$instance->error_uri = $jsonPayload["error_uri"];
		}
		return $instance;
	}
}