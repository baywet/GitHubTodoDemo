package githubtododemo.githubauthentication;

import java.net.URI;

public class GitHubDeviceCodeResponse {
	public String device_code;
	public String user_code;
	public URI verification_uri;
	public Integer expires_in;
	public Integer interval;
}
