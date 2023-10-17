<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AutoMerge_merge_method extends Enum {
    public const MERGE = 'merge';
    public const SQUASH = 'squash';
    public const REBASE = 'rebase';
}
