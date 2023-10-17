<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Commits;

use Baywet\Githubtododemo\Github\Repos\Item\Item\Commits\Item\WithCommit_shaItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /repos/{owner}/{repo}/commits
*/
class CommitsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the baywet.githubtododemo.github.repos.item.item.commits.item collection
     * @param string $commit_sha Unique identifier of the item
     * @return WithCommit_shaItemRequestBuilder
    */
    public function byCommit_sha(string $commit_sha): WithCommit_shaItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['commit_sha'] = $commit_sha;
        return new WithCommit_shaItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CommitsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/repos/{owner}/{repo}/commits');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
