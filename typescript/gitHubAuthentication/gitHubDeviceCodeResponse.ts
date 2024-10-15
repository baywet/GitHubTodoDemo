export interface GitHubDeviceCodeResponse {
  device_code: string | undefined;
  user_code: string | undefined;
  verification_uri: string | undefined;
  expires_in: number;
  interval: number;
}
export interface GitHubAccessCodeResponse {
	access_token: string | undefined;
	token_type: string | undefined;
	scope: string | undefined;
	error: string | undefined;
	error_description: string | undefined;
	error_uri: string | undefined;
}