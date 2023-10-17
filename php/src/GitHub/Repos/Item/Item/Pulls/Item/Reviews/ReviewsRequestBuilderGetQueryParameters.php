<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls\Item\Reviews;

/**
 * The list of reviews returns in chronological order.
*/
class ReviewsRequestBuilderGetQueryParameters 
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
     * Instantiates a new reviewsRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $page Page number of the results to fetch.
     * @param int|null $per_page The number of results per page (max 100).
    */
    public function __construct(?int $page = null, ?int $per_page = null) {
        $this->page = $page;
        $this->perPage = $per_page;
    }

}
