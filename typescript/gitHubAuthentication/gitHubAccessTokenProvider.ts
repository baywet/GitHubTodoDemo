import { AccessTokenProvider, AllowedHostsValidator } from '@microsoft/kiota-abstractions';
import { GitHubAccessCodeResponse, GitHubDeviceCodeResponse } from './gitHubDeviceCodeResponse.js';

export class GitHubAccessTokenProvider implements AccessTokenProvider {
	
	/**
	 *
	 */
	constructor(private readonly clientId: string, private readonly scope: string, private readonly allowedHostsValidator: AllowedHostsValidator) {
		if(!clientId) {
			throw new Error("clientId cannot be undefined");
		}
		if(!scope) {
			throw new Error("scope cannot be undefined");
		}
		if (!allowedHostsValidator) {
			throw new Error("allowedHostsValidator cannot be undefined");
		}
	}
	public getAuthorizationToken: (url?: string, additionalAuthenticationContext?: Record<string, unknown>) => Promise<string> = async (url, additionalAuthenticationContext) => {
		if (!url || !this.allowedHostsValidator.isUrlHostValid(url)) {
			return "";
		}
		if (!url.toLocaleLowerCase().startsWith("https")) {
			throw new Error("The URL must be HTTPS");
		}
		const deviceCodeResponse = await this.getDeviceCode();
		if (!deviceCodeResponse) {
			throw new Error("Couldn't get a device code");
		}
		console.log(`Please go to ${deviceCodeResponse.verification_uri} and enter the code ${deviceCodeResponse.user_code} to authenticate.`);
		const tokenResponse = await this.pollForTokenWIthTimeOut(deviceCodeResponse);
		if (!tokenResponse.access_token) {
			throw new Error("Couldn't get a token");
		}
		return tokenResponse.access_token;

	};
	private async pollForTokenWIthTimeOut(deviceCodeResponse: GitHubDeviceCodeResponse): Promise<GitHubAccessCodeResponse> {
		const pollingPromise = this.pollForToken(deviceCodeResponse);
		const timeOutPromise = new Promise<GitHubAccessCodeResponse>((_, reject) => setTimeout(() => reject(new Error("The device code has expired")), deviceCodeResponse.expires_in * 1000));
		return Promise.race([timeOutPromise, pollingPromise]);
	}
	private async pollForToken(deviceCodeResponse: GitHubDeviceCodeResponse): Promise<GitHubAccessCodeResponse> {
		let tokenResponse: GitHubAccessCodeResponse | undefined = undefined;
		while (!tokenResponse) {
			tokenResponse = await this.getToken(deviceCodeResponse);
			await new Promise(resolve => setTimeout(resolve, (deviceCodeResponse.interval+1) * 1000));
		}
		return tokenResponse;
	}
	private async getToken(deviceCodeResponse: GitHubDeviceCodeResponse): Promise<GitHubAccessCodeResponse | undefined> {
		const httpResponse = await fetch("https://github.com/login/oauth/access_token", {
			method: "POST",
			body: new URLSearchParams({
				"client_id": this.clientId,
				"device_code": deviceCodeResponse.device_code!,
				"grant_type": "urn:ietf:params:oauth:grant-type:device_code"
			}),
			headers: {
				"Content-Type": "application/x-www-form-urlencoded",
				"Accept": "application/json"
			}
		});
		if (!httpResponse.ok) {
			throw new Error(`Couldn't get a token: ${httpResponse.status}`);
		}
		const tokenResponse = await httpResponse.json() as GitHubAccessCodeResponse;
		if ("authorization_pending" === tokenResponse.error?.toLocaleLowerCase()) {
			return undefined;
		} else if (tokenResponse.error) {
			throw new Error(`Couldn't get a token: ${tokenResponse.error}`);
		} else {
			return tokenResponse;
		}
	}
	private async getDeviceCode(): Promise<GitHubDeviceCodeResponse> {
		const httpResponse = await fetch("https://github.com/login/device/code", {
			method: "POST",
			body: JSON.stringify({
				client_id: this.clientId,
				scope: this.scope
			}),
			headers: {
				"Content-Type": "application/json",
				"Accept": "application/json"
			}
		});
		if (!httpResponse.ok) {
			throw new Error(`Couldn't get a device code: ${httpResponse.status}`);
		}
		return await httpResponse.json() as GitHubDeviceCodeResponse;
	}
	public getAllowedHostsValidator: () => AllowedHostsValidator = () => this.allowedHostsValidator;
}