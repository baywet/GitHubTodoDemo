<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls\Item\Files;

/**
 * **Note:** Responses include a maximum of 3000 files. The paginated response returns 30 files per page by default.
*/
class FilesRequestBuilderGetQueryParameters 
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
     * Instantiates a new filesRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $page Page number of the results to fetch.
     * @param int|null $per_page The number of results per page (max 100).
    */
    public function __construct(?int $page = null, ?int $per_page = null) {
        $this->page = $page;
        $this->perPage = $per_page;
    }

}
