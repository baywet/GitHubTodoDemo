<?php

namespace Baywet\Githubtododemo\Githubauthentication;

use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;

require __DIR__.'/../../vendor/autoload.php';

class GitHubAuthenticationProvider extends BaseBearerTokenAuthenticationProvider
{
	public function __construct(string $clientId, string $scope, array $allowedHosts = ["api.github.com"]) {
		parent::__construct(new GitHubAccessTokenProvider($clientId, $scope, $allowedHosts));
	}
}