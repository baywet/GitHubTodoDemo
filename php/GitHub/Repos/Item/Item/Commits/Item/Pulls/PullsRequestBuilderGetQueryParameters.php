<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Commits\Item\Pulls;

/**
 * Lists the merged pull request that introduced the commit to the repository. If the commit is not present in the default branch, will only return open pull requests associated with the commit.To list the open or merged pull requests associated with a branch, you can set the `commit_sha` parameter to the branch name.
*/
class PullsRequestBuilderGetQueryParameters 
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
     * Instantiates a new pullsRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $page Page number of the results to fetch.
     * @param int|null $per_page The number of results per page (max 100).
    */
    public function __construct(?int $page = null, ?int $per_page = null) {
        $this->page = $page;
        $this->perPage = $per_page;
    }

}
