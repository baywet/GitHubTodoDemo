<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls\Item\Files;

use Baywet\Githubtododemo\Github\Models\BasicError;
use Baywet\Githubtododemo\Github\Models\DiffEntry;
use Baywet\Githubtododemo\Github\Models\Files503Error;
use Baywet\Githubtododemo\Github\Models\ValidationError;
use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /repos/{owner}/{repo}/pulls/{pull_number}/files
*/
class FilesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new FilesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/repos/{owner}/{repo}/pulls/{pull_number}/files{?per_page*,page*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * **Note:** Responses include a maximum of 3000 files. The paginated response returns 30 files per page by default.
     * @param FilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.github.com/rest/pulls/pulls#list-pull-requests-files API method documentation
    */
    public function get(?FilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '422' => [ValidationError::class, 'createFromDiscriminatorValue'],
                    '500' => [BasicError::class, 'createFromDiscriminatorValue'],
                    '503' => [Files503Error::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendCollectionAsync($requestInfo, [DiffEntry::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * **Note:** Responses include a maximum of 3000 files. The paginated response returns 30 files per page by default.
     * @param FilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return FilesRequestBuilder
    */
    public function withUrl(string $rawUrl): FilesRequestBuilder {
        return new FilesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
