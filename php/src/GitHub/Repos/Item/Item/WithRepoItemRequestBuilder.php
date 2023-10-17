<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item;

use Baywet\Githubtododemo\Github\Repos\Item\Item\Commits\CommitsRequestBuilder;
use Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls\PullsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /repos/{owner}/{repo}
*/
class WithRepoItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The commits property
    */
    public function commits(): CommitsRequestBuilder {
        return new CommitsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The pulls property
    */
    public function pulls(): PullsRequestBuilder {
        return new PullsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithRepoItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/repos/{owner}/{repo}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
