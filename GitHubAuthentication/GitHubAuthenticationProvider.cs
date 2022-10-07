using Microsoft.Kiota.Abstractions.Authentication;

namespace GithubTodoDemo.GitHubAuthentication;

public class GitHubAuthenticationProvider : BaseBearerTokenAuthenticationProvider
{
	public GitHubAuthenticationProvider(string clientId, string scope, IEnumerable<string> validHosts) : base(new GitHubAccessTokenProvider {
		ClientId = clientId,
		Scope = scope,
		AllowedHostsValidator = new AllowedHostsValidator(validHosts)
	})
	{
		if (string.IsNullOrEmpty(clientId))
			throw new ArgumentNullException(nameof(clientId));
		if (string.IsNullOrEmpty(scope))
			throw new ArgumentNullException(nameof(scope));
		if (validHosts == null)
			throw new ArgumentNullException(nameof(validHosts));
	}
}