<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls\Item\Commits;

/**
 * Lists a maximum of 250 commits for a pull request. To receive a complete commit list for pull requests with more than 250 commits, use the [List commits](https://docs.github.com/rest/commits/commits#list-commits) endpoint.
*/
class CommitsRequestBuilderGetQueryParameters 
{
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
     * Instantiates a new commitsRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $page Page number of the results to fetch.
     * @param int|null $per_page The number of results per page (max 100).
    */
    public function __construct(?int $page = null, ?int $per_page = null) {
        $this->page = $page;
        $this->perPage = $per_page;
    }

}
