package githubtododemo.githubauthentication;

import java.net.URI;

public class GitHubAccessCodeResponse {
	public String access_token;
	public String token_type;
	public String scope;
	public String error;
	public String error_description;
	public URI error_uri;
}