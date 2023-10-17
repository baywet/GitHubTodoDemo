<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls;

use Microsoft\Kiota\Abstractions\Enum;

class GetSortQueryParameterType extends Enum {
    public const CREATED = 'created';
    public const UPDATED = 'updated';
    public const POPULARITY = 'popularity';
    public const LONG_RUNNING = 'long-running';
}
