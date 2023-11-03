<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls\Item\UpdateBranch;

use Baywet\Githubtododemo\Github\Models\BasicError;
use Baywet\Githubtododemo\Github\Models\ValidationError;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /repos/{owner}/{repo}/pulls/{pull_number}/update-branch
*/
class UpdateBranchRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new UpdateBranchRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/repos/{owner}/{repo}/pulls/{pull_number}/update-branch');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Updates the pull request branch with the latest upstream changes by merging HEAD from the base branch into the pull request branch.
     * @param UpdateBranchPutRequestBody $body The request body
     * @param UpdateBranchRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UpdateBranchPutResponse|null>
     * @throws Exception
     * @link https://docs.github.com/rest/pulls/pulls#update-a-pull-request-branch API method documentation
    */
    public function put(UpdateBranchPutRequestBody $body, ?UpdateBranchRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '403' => [BasicError::class, 'createFromDiscriminatorValue'],
                '422' => [ValidationError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UpdateBranchPutResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Updates the pull request branch with the latest upstream changes by merging HEAD from the base branch into the pull request branch.
     * @param UpdateBranchPutRequestBody $body The request body
     * @param UpdateBranchRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(UpdateBranchPutRequestBody $body, ?UpdateBranchRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UpdateBranchRequestBuilder
    */
    public function withUrl(string $rawUrl): UpdateBranchRequestBuilder {
        return new UpdateBranchRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
