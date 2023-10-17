<?php

namespace Baywet\Githubtododemo;

use Baywet\Githubtododemo\Githubauthentication\GitHubAuthenticationProvider;
use Baywet\Githubtododemo\GitHub\GitHubClient;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/GitHubAuthentication/GitHubAuthenticationProvider.php';

$gitHubAuthenticationProvider = new GitHubAuthenticationProvider(Constants::$GithubClientId, "repo");
$gitHubRequestAdapter = new GuzzleRequestAdapter($gitHubAuthenticationProvider);
$gitHubClient = new GitHubClient($gitHubRequestAdapter);

$pullRequests = $gitHubClient->repos()->byOwner("baywet")->byRepo("demo")->pulls()->get()->wait();
foreach($pullRequests as $pullRequest) {
	echo $pullRequest->getTitle()."\n";
}