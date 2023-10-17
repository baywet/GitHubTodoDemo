<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls;

use Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls\Item\WithPull_numberItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /repos/{owner}/{repo}/pulls
*/
class PullsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the baywet.githubtododemo.github.repos.item.item.pulls.item collection
     * @param int $pull_number The number that identifies the pull request.
     * @return WithPull_numberItemRequestBuilder
    */
    public function byPull_number(int $pull_number): WithPull_numberItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['pull_number'] = $pull_number;
        return new WithPull_numberItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PullsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/repos/{owner}/{repo}/pulls');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
