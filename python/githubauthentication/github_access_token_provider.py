import asyncio
import httpx
from typing import Any, Dict, List
from urllib.parse import urlparse
from kiota_abstractions.authentication import AccessTokenProvider, AllowedHostsValidator

from githubauthentication.github_device_code_response import GitHubDeviceCodeResponse

class GitHubAccessTokenProvider(AccessTokenProvider):
	def __init__(
			self,
			client_id: str,
			scope: str,
			allowed_hosts: List[str]= ["api.github.com"]) -> None:
		super().__init__()
		self._client_id = client_id
		self._scope = scope
		self._allowed_hosts_validator = AllowedHostsValidator(allowed_hosts)

	def get_allowed_hosts_validator(self) -> AllowedHostsValidator:
		return self._allowed_hosts_validator
	
	async def get_authorization_token(
			self,
			uri: str,
			additional_authentication_context: Dict[str, Any] = {}) -> str:
		if not self._allowed_hosts_validator.is_host_allowed(uri):
			return ""
		parsed_url = urlparse(uri)

		if not all([parsed_url.scheme, parsed_url.netloc]):
			return ""
		
		if not parsed_url.scheme == "https":
			return ""
		device_code_response = await self.get_device_code()
		if not device_code_response:
			return ""
		token = await self.poll_for_authorization_token(device_code_response)
		return token
		
	async def poll_for_authorization_token(self,
										device_code_response: GitHubDeviceCodeResponse) -> str:
		token = await self.get_token(device_code_response)
		while not token:
			await asyncio.sleep(device_code_response.interval)
			token = await self.get_token(device_code_response)
		return token
	async def get_token(self,
					device_code_response: GitHubDeviceCodeResponse) -> str:
		target_url = "https://github.com/login/oauth/access_token"
		request = httpx.Request("POST", target_url, headers= {
			"Content-Type": "application/x-www-form-urlencoded",
			"Accept": "application/json"
		}, data = {
			"client_id": self._client_id,
			"device_code": device_code_response.device_code,
			"grant_type": "urn:ietf:params:oauth:grant-type:device_code"
		})
		response = await httpx.AsyncClient().send(request)
		if response.status_code == 200:
			json_response = response.json()
			return json_response["access_token"]
		return ""

	async def get_device_code(self) -> GitHubDeviceCodeResponse:
		target_url = "https://github.com/login/device/code"
		request = httpx.Request("POST", target_url, headers= {
			"Content-Type": "application/x-www-form-urlencoded",
			"Accept": "application/json"
		}, data = {
			"client_id": self._client_id,
			"scope": self._scope
		})
		response = await httpx.AsyncClient().send(request)
		if response.status_code == 200:
			json_response = response.json()
			return GitHubDeviceCodeResponse(
				json_response["device_code"],
				json_response["user_code"],
				json_response["verification_uri"],
				json_response["expires_in"],
				json_response["interval"])
		return None