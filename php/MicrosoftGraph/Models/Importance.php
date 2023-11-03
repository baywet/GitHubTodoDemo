<?php

namespace Baywet\Githubtododemo\Microsoftgraph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class Importance extends Enum {
    public const LOW = 'low';
    public const NORMAL = 'normal';
    public const HIGH = 'high';
}
