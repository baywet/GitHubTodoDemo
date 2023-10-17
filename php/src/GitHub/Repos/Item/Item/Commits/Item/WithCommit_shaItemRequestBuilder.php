<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Commits\Item;

use Baywet\Githubtododemo\Github\Repos\Item\Item\Commits\Item\Pulls\PullsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /repos/{owner}/{repo}/commits/{commit_sha}
*/
class WithCommit_shaItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The pulls property
    */
    public function pulls(): PullsRequestBuilder {
        return new PullsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithCommit_shaItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/repos/{owner}/{repo}/commits/{commit_sha}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
