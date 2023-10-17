<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls;

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
     * @param string|null $base Filter pulls by base branch name. Example: `gh-pages`.
     * @param GetDirectionQueryParameterType|null $direction The direction of the sort. Default: `desc` when sort is `created` or sort is not specified, otherwise `asc`.
     * @param string|null $head Filter pulls by head user or head organization and branch name in the format of `user:ref-name` or `organization:ref-name`. For example: `github:new-script-format` or `octocat:test-branch`.
     * @param int|null $page Page number of the results to fetch.
     * @param int|null $per_page The number of results per page (max 100).
     * @param GetSortQueryParameterType|null $sort What to sort results by. `popularity` will sort by the number of comments. `long-running` will sort by date created and will limit the results to pull requests that have been open for more than a month and have had activity within the past month.
     * @param GetStateQueryParameterType|null $state Either `open`, `closed`, or `all` to filter by state.
     * @return PullsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $base = null, ?GetDirectionQueryParameterType $direction = null, ?string $head = null, ?int $page = null, ?int $per_page = null, ?GetSortQueryParameterType $sort = null, ?GetStateQueryParameterType $state = null): PullsRequestBuilderGetQueryParameters {
        return new PullsRequestBuilderGetQueryParameters($base, $direction, $head, $page, $per_page, $sort, $state);
    }

}
