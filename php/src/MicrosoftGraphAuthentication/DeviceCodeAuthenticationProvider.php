<?php

namespace Baywet\Githubtododemo\Microsoftgraphauthentication;

use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;

class DeviceCodeAuthenticationProvider extends BaseBearerTokenAuthenticationProvider
{
	public function __construct(string $clientId, string $tenantId, string $scopes) {
		parent::__construct(new DeviceCodeAccessTokenProvider($clientId, $tenantId, $scopes));
	}
}