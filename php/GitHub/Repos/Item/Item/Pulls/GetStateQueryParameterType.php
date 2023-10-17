<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls;

use Microsoft\Kiota\Abstractions\Enum;

class GetStateQueryParameterType extends Enum {
    public const OPEN = 'open';
    public const CLOSED = 'closed';
    public const ALL = 'all';
}
