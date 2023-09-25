class GitHubDeviceCodeResponse:
	def __init__(
			  self,
			  device_code: str,
			  user_code: str,
			  verification_uri: str,
			  expires_in: int,
			  interval: int) -> None:
		self._device_code = device_code
		self._user_code = user_code
		self._verification_uri = verification_uri
		self._expires_in = expires_in
		self._interval = interval
	@property
	def device_code(self):
		return self._device_code
	
	@property
	def user_code(self):
		return self._user_code
	@property
	def verification_uri(self):
		return self._verification_uri
	@property
	def expires_in(self):
		return self._expires_in
	@property
	def interval(self):
		return self._interval
	