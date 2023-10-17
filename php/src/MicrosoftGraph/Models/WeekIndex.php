<?php

namespace Baywet\Githubtododemo\Microsoftgraph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WeekIndex extends Enum {
    public const FIRST = 'first';
    public const SECOND = 'second';
    public const THIRD = 'third';
    public const FOURTH = 'fourth';
    public const LAST = 'last';
}
