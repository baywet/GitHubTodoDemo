package githubtododemo.githubauthentication;

import jakarta.annotation.Nonnull;

import com.microsoft.kiota.authentication.BaseBearerTokenAuthenticationProvider;

public class GitHubAuthenticationProvider extends BaseBearerTokenAuthenticationProvider {
	public GitHubAuthenticationProvider(@Nonnull final String clientId, @Nonnull final String scope) {
		super(new GitHubAccessTokenProvider(clientId, scope));
	}
}
