<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls\Item\Merge;

use Microsoft\Kiota\Abstractions\Enum;

class MergePutRequestBody_merge_method extends Enum {
    public const MERGE = 'merge';
    public const SQUASH = 'squash';
    public const REBASE = 'rebase';
}
