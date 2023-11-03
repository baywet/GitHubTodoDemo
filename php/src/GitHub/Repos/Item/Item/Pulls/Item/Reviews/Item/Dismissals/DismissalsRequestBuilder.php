<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls\Item\Reviews\Item\Dismissals;

use Baywet\Githubtododemo\Github\Models\BasicError;
use Baywet\Githubtododemo\Github\Models\PullRequestReview;
use Baywet\Githubtododemo\Github\Models\ValidationErrorSimple;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/dismissals
*/
class DismissalsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DismissalsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/dismissals');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * **Note:** To dismiss a pull request review on a [protected branch](https://docs.github.com/rest/branches/branch-protection), you must be a repository administrator or be included in the list of people or teams who can dismiss pull request reviews.
     * @param DismissalsPutRequestBody $body The request body
     * @param DismissalsRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PullRequestReview|null>
     * @throws Exception
     * @link https://docs.github.com/rest/pulls/reviews#dismiss-a-review-for-a-pull-request API method documentation
    */
    public function put(DismissalsPutRequestBody $body, ?DismissalsRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '404' => [BasicError::class, 'createFromDiscriminatorValue'],
                '422' => [ValidationErrorSimple::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PullRequestReview::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * **Note:** To dismiss a pull request review on a [protected branch](https://docs.github.com/rest/branches/branch-protection), you must be a repository administrator or be included in the list of people or teams who can dismiss pull request reviews.
     * @param DismissalsPutRequestBody $body The request body
     * @param DismissalsRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(DismissalsPutRequestBody $body, ?DismissalsRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return DismissalsRequestBuilder
    */
    public function withUrl(string $rawUrl): DismissalsRequestBuilder {
        return new DismissalsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
