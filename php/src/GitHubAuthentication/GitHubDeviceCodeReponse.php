<?php

namespace Baywet\Githubtododemo\Githubauthentication;

class GitHubDeviceCodeResponse 
{
	public string $device_code;
	public string $user_code;
	public string $verification_uri;
	public int $expires_in_seconds;
	public int $interval_in_seconds;
	public static function fromJson($jsonPayload)
	{
		$jsonPayload = json_decode($jsonPayload, true);
		$instance = new GitHubDeviceCodeResponse();
		$instance->device_code = $jsonPayload["device_code"];
		$instance->user_code = $jsonPayload["user_code"];
		$instance->verification_uri = $jsonPayload["verification_uri"];
		$instance->expires_in_seconds = $jsonPayload["expires_in"];
		$instance->interval_in_seconds = $jsonPayload["interval"];
		return $instance;
	}
}