<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls\Item\Commits;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CommitsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CommitsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CommitsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new commitsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CommitsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CommitsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new commitsRequestBuilderGetQueryParameters.
     * @param int|null $page Page number of the results to fetch.
     * @param int|null $per_page The number of results per page (max 100).
     * @return CommitsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $page = null, ?int $per_page = null): CommitsRequestBuilderGetQueryParameters {
        return new CommitsRequestBuilderGetQueryParameters($page, $per_page);
    }

}
