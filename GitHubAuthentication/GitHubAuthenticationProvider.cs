using Microsoft.Kiota.Abstractions;
using Microsoft.Kiota.Abstractions.Authentication;

namespace GithubTodoDemo.GitHubAuthentication;

public class GitHubAuthenticationProvider : IAuthenticationProvider
{
	public GitHubAuthenticationProvider(string clientId, string scope, IEnumerable<string> validHosts)
	{
		if (string.IsNullOrEmpty(clientId))
			throw new ArgumentNullException(nameof(clientId));
		if (string.IsNullOrEmpty(scope))
			throw new ArgumentNullException(nameof(scope));
		if (validHosts == null)
			throw new ArgumentNullException(nameof(validHosts));

		AccessTokenProvider = new GitHubAccessTokenProvider {
			ClientId = clientId,
			Scope = scope,
			AllowedHostsValidator = new AllowedHostsValidator(validHosts)
		};
	}
	public IAccessTokenProvider AccessTokenProvider {get; private set;}
    private const string AuthorizationHeaderKey = "Authorization";
    private const string ClaimsKey = "claims";
	public async Task AuthenticateRequestAsync(RequestInformation request, Dictionary<string, object> additionalAuthenticationContext = null, CancellationToken cancellationToken = default) {
		if(request == null) throw new ArgumentNullException(nameof(request));
		request.Headers.Add("User-Agent", "GithubTodoDemo/1.0.0");
        if(additionalAuthenticationContext != null &&
            additionalAuthenticationContext.ContainsKey(ClaimsKey) &&
            request.Headers.ContainsKey(AuthorizationHeaderKey))
            request.Headers.Remove(AuthorizationHeaderKey);

        if(!request.Headers.ContainsKey(AuthorizationHeaderKey))
        {
            var token = await AccessTokenProvider.GetAuthorizationTokenAsync(request.URI, additionalAuthenticationContext, cancellationToken);
            if(!string.IsNullOrEmpty(token))
                request.Headers.Add(AuthorizationHeaderKey, $"Bearer {token}");
        }
	}
}