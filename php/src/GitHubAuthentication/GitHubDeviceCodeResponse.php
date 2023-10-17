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
		if (array_key_exists("device_code", $jsonPayload)) {
			$instance->device_code = $jsonPayload["device_code"];
		}
		if (array_key_exists("user_code", $jsonPayload)) {
			$instance->user_code = $jsonPayload["user_code"];
		}
		if (array_key_exists("verification_uri", $jsonPayload)) {
			$instance->verification_uri = $jsonPayload["verification_uri"];
		}
		if (array_key_exists("expires_in", $jsonPayload)) {
			$instance->expires_in_seconds = $jsonPayload["expires_in"];
		}
		if (array_key_exists("interval", $jsonPayload)) {
			$instance->interval_in_seconds =$jsonPayload["interval"];
		}
		return $instance;
	}
}