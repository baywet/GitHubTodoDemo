<?php

namespace Baywet\Githubtododemo\Github\Repos\Item;

use Baywet\Githubtododemo\Github\Repos\Item\Item\WithRepoItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /repos/{owner}
*/
class WithOwnerItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the baywet.githubtododemo.github.repos.item.item collection
     * @param string $repo Unique identifier of the item
     * @return WithRepoItemRequestBuilder
    */
    public function byRepo(string $repo): WithRepoItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['repo'] = $repo;
        return new WithRepoItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WithOwnerItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/repos/{owner}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
