<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Commits\Item\Pulls;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PullsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PullsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PullsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new pullsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PullsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PullsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new pullsRequestBuilderGetQueryParameters.
     * @param int|null $page Page number of the results to fetch.
     * @param int|null $per_page The number of results per page (max 100).
     * @return PullsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $page = null, ?int $per_page = null): PullsRequestBuilderGetQueryParameters {
        return new PullsRequestBuilderGetQueryParameters($page, $per_page);
    }

}
