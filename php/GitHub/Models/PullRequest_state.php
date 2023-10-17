<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PullRequest_state extends Enum {
    public const OPEN = 'open';
    public const CLOSED = 'closed';
}
