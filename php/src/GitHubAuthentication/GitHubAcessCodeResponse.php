<?php
namespace Baywet\Githubtododemo\Githubauthentication;


class GitHubAccessTokenCodeResponse
{
	public string $access_token;
	public string $token_type;
	public string $scope;
	public string $error;
	public string $error_description;
	public string $error_uri;
	public static function fromJson($jsonPayload)
	{
		$jsonPayload = json_decode($jsonPayload, true);
		$instance = new GitHubAccessTokenCodeResponse();
		$instance->access_token = $jsonPayload["access_token"];
		$instance->token_type = $jsonPayload["token_type"];
		$instance->scope = $jsonPayload["scope"];
		$instance->error = $jsonPayload["error"];
		$instance->error_description = $jsonPayload["error_description"];
		$instance->error_uri = $jsonPayload["error_uri"];
		return $instance;
	}
}