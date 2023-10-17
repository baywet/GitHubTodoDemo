<?php

namespace Baywet\Githubtododemo;

use Baywet\Githubtododemo\Githubauthentication\GitHubAuthenticationProvider;
use Baywet\Githubtododemo\GitHub\GitHubClient;
use Baywet\Githubtododemo\Microsoftgraph\MicrosoftGraphClient;
use Baywet\Githubtododemo\Microsoftgraph\Models\DateTimeTimeZone;
use Baywet\Githubtododemo\Microsoftgraph\Models\Importance;
use Baywet\Githubtododemo\Microsoftgraph\Models\LinkedResource;
use Baywet\Githubtododemo\Microsoftgraphauthentication\DeviceCodeAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;
use Baywet\Githubtododemo\Microsoftgraph\Models\TodoTask;
use DateTime;
use DateInterval;

require_once __DIR__.'/../vendor/autoload.php';

$gitHubAuthenticationProvider = new GitHubAuthenticationProvider(Constants::$GithubClientId, "repo");
$gitHubRequestAdapter = new GuzzleRequestAdapter($gitHubAuthenticationProvider);
$gitHubClient = new GitHubClient($gitHubRequestAdapter);

$microsoftGraphAuthenticationProvider = new DeviceCodeAuthenticationProvider(Constants::$GraphClientId, Constants::$GraphTenantId, "Tasks.ReadWrite");
$microsoftGraphRequestAdapter = new GuzzleRequestAdapter($microsoftGraphAuthenticationProvider);
$microsoftGraphClient = new MicrosoftGraphClient($microsoftGraphRequestAdapter);

$pullRequests = $gitHubClient->repos()->byOwner("baywet")->byRepo("demo")->pulls()->get()->wait();

$todoLists = $microsoftGraphClient->me()->todo()->lists()->get()->wait();
$todoList = $todoLists->getValue()[0];

foreach($pullRequests as $pullRequest) {
	echo $pullRequest->getTitle()."\n";
	$task = new TodoTask();
	$task->setTitle("Review" . $pullRequest->getTitle());
	$task->setImportance(new Importance(Importance::HIGH));
	$linkedResource = new LinkedResource();
	$linkedResource->setWebUrl($pullRequest->getHtmlUrl());
	$linkedResource->setApplicationName("GitHub");
	$task->setLinkedResources([
		$linkedResource
	]);
	$dueDateTime = new DateTimeTimeZone();
	$dueDateTime->setTimeZone("UTC");
	$dueDateTime->setDateTime($pullRequest->getCreatedAt()->add(new DateInterval('P7D'))->format(DateTime::ISO8601));
	$task->setDueDateTime($dueDateTime);
	$microsoftGraphClient->me()->todo()->lists()->byTodoTaskListId($todoList->getId())->tasks()->post($task)->wait();
}