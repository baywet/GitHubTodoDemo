import { AllowedHostsValidator, AuthenticationProvider, RequestInformation } from '@microsoft/kiota-abstractions';
import { GitHubAccessTokenProvider } from './gitHubAccessTokenProvider.js';

export class GitHubAuthenticationProvider implements AuthenticationProvider {
	private readonly accessTokenProvider: GitHubAccessTokenProvider;
	/**
	 *
	 */
	public constructor(clientId: string, scope: string, validHosts: string[] = ["api.github.com"]) {
		this.accessTokenProvider = new GitHubAccessTokenProvider(clientId, scope, new AllowedHostsValidator(new Set(validHosts)));
	}
	private static readonly authorizationHeaderKey = "Authorization";
    private static readonly claimsKey = "claims";
	public authenticateRequest: (request: RequestInformation, additionalAuthenticationContext?: Record<string, unknown>) => Promise<void> = async (request, additionalAuthenticationContext) => {
		if(!request) {
			throw new Error("request cannot be undefined");
		}
		request.headers.add("User-Agent", "GithubTodoDemo/1.0.0");
		if(additionalAuthenticationContext?.[GitHubAuthenticationProvider.claimsKey] &&
            request.headers.has(GitHubAuthenticationProvider.authorizationHeaderKey)) {
            request.headers.delete(GitHubAuthenticationProvider.authorizationHeaderKey);
		}
		if (!request.headers.has(GitHubAuthenticationProvider.authorizationHeaderKey)) {
			const token = await this.accessTokenProvider.getAuthorizationToken(request.URL, additionalAuthenticationContext);
			request.headers.add(GitHubAuthenticationProvider.authorizationHeaderKey, `Bearer ${token}`);
		}
	}

}