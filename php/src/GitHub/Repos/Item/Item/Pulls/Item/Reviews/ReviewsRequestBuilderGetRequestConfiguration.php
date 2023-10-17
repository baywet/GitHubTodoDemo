<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls\Item\Reviews;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ReviewsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ReviewsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ReviewsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new reviewsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ReviewsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ReviewsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new reviewsRequestBuilderGetQueryParameters.
     * @param int|null $page Page number of the results to fetch.
     * @param int|null $per_page The number of results per page (max 100).
     * @return ReviewsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $page = null, ?int $per_page = null): ReviewsRequestBuilderGetQueryParameters {
        return new ReviewsRequestBuilderGetQueryParameters($page, $per_page);
    }

}
