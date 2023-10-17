<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls;

/**
 * Draft pull requests are available in public repositories with GitHub Free and GitHub Free for organizations, GitHub Pro, and legacy per-repository billing plans, and in public and private repositories with GitHub Team and GitHub Enterprise Cloud. For more information, see [GitHub's products](https://docs.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
*/
class PullsRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $base Filter pulls by base branch name. Example: `gh-pages`.
    */
    public ?string $base = null;
    
    /**
     * @var GetDirectionQueryParameterType|null $direction The direction of the sort. Default: `desc` when sort is `created` or sort is not specified, otherwise `asc`.
    */
    public ?GetDirectionQueryParameterType $direction = null;
    
    /**
     * @var string|null $head Filter pulls by head user or head organization and branch name in the format of `user:ref-name` or `organization:ref-name`. For example: `github:new-script-format` or `octocat:test-branch`.
    */
    public ?string $head = null;
    
    /**
     * @var int|null $page Page number of the results to fetch.
    */
    public ?int $page = null;
    
    /**
     * @QueryParameter("per_page")
     * @var int|null $perPage The number of results per page (max 100).
    */
    public ?int $perPage = null;
    
    /**
     * @var GetSortQueryParameterType|null $sort What to sort results by. `popularity` will sort by the number of comments. `long-running` will sort by date created and will limit the results to pull requests that have been open for more than a month and have had activity within the past month.
    */
    public ?GetSortQueryParameterType $sort = null;
    
    /**
     * @var GetStateQueryParameterType|null $state Either `open`, `closed`, or `all` to filter by state.
    */
    public ?GetStateQueryParameterType $state = null;
    
    /**
     * Instantiates a new pullsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $base Filter pulls by base branch name. Example: `gh-pages`.
     * @param GetDirectionQueryParameterType|null $direction The direction of the sort. Default: `desc` when sort is `created` or sort is not specified, otherwise `asc`.
     * @param string|null $head Filter pulls by head user or head organization and branch name in the format of `user:ref-name` or `organization:ref-name`. For example: `github:new-script-format` or `octocat:test-branch`.
     * @param int|null $page Page number of the results to fetch.
     * @param int|null $per_page The number of results per page (max 100).
     * @param GetSortQueryParameterType|null $sort What to sort results by. `popularity` will sort by the number of comments. `long-running` will sort by date created and will limit the results to pull requests that have been open for more than a month and have had activity within the past month.
     * @param GetStateQueryParameterType|null $state Either `open`, `closed`, or `all` to filter by state.
    */
    public function __construct(?string $base = null, ?GetDirectionQueryParameterType $direction = null, ?string $head = null, ?int $page = null, ?int $per_page = null, ?GetSortQueryParameterType $sort = null, ?GetStateQueryParameterType $state = null) {
        $this->base = $base;
        $this->direction = $direction;
        $this->head = $head;
        $this->page = $page;
        $this->perPage = $per_page;
        $this->sort = $sort;
        $this->state = $state;
    }

}
