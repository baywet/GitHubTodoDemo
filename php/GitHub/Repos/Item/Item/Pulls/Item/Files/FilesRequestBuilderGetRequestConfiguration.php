<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls\Item\Files;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FilesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FilesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FilesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new filesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FilesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FilesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new filesRequestBuilderGetQueryParameters.
     * @param int|null $page Page number of the results to fetch.
     * @param int|null $per_page The number of results per page (max 100).
     * @return FilesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $page = null, ?int $per_page = null): FilesRequestBuilderGetQueryParameters {
        return new FilesRequestBuilderGetQueryParameters($page, $per_page);
    }

}
