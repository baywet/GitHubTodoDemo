<?php

namespace Baywet\Githubtododemo\Microsoftgraphauthentication;

use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;

require_once __DIR__.'/../../vendor/autoload.php';

class DeviceCodeAuthenticationProvider extends BaseBearerTokenAuthenticationProvider
{
	public function __construct(string $clientId, string $tenantId, string $scopes) {
		parent::__construct(new DeviceCodeAccessTokenProvider($clientId, $tenantId, $scopes));
	}
}