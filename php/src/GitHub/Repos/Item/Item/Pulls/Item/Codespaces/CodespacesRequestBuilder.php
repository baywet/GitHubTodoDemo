<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls\Item\Codespaces;

use Baywet\Githubtododemo\Github\Models\BasicError;
use Baywet\Githubtododemo\Github\Models\Codespace;
use Baywet\Githubtododemo\Github\Models\Codespace503Error;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /repos/{owner}/{repo}/pulls/{pull_number}/codespaces
*/
class CodespacesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CodespacesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/repos/{owner}/{repo}/pulls/{pull_number}/codespaces');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Creates a codespace owned by the authenticated user for the specified pull request.You must authenticate using an access token with the `codespace` scope to use this endpoint.GitHub Apps must have write access to the `codespaces` repository permission to use this endpoint.
     * @param CodespacesPostRequestBody $body The request body
     * @param CodespacesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Codespace|null>
     * @throws Exception
     * @link https://docs.github.com/rest/codespaces/codespaces#create-a-codespace-from-a-pull-request API method documentation
    */
    public function post(CodespacesPostRequestBody $body, ?CodespacesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '401' => [BasicError::class, 'createFromDiscriminatorValue'],
                '403' => [BasicError::class, 'createFromDiscriminatorValue'],
                '404' => [BasicError::class, 'createFromDiscriminatorValue'],
                '503' => [Codespace503Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Codespace::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Creates a codespace owned by the authenticated user for the specified pull request.You must authenticate using an access token with the `codespace` scope to use this endpoint.GitHub Apps must have write access to the `codespaces` repository permission to use this endpoint.
     * @param CodespacesPostRequestBody $body The request body
     * @param CodespacesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CodespacesPostRequestBody $body, ?CodespacesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return CodespacesRequestBuilder
    */
    public function withUrl(string $rawUrl): CodespacesRequestBuilder {
        return new CodespacesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
