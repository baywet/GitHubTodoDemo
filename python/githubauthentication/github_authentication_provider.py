from typing import List
from kiota_abstractions.authentication import BaseBearerTokenAuthenticationProvider

from githubauthentication.github_access_token_provider import GitHubAccessTokenProvider

class GitHubAuthenticationProvider(BaseBearerTokenAuthenticationProvider):
	def __init__(
			self,
			client_id: str,
			scope: str,
			allowed_hosts: List[str]= ["api.github.com"]) -> None:
		super().__init__(GitHubAccessTokenProvider(client_id, scope, allowed_hosts))