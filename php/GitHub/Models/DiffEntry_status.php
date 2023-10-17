<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DiffEntry_status extends Enum {
    public const ADDED = 'added';
    public const REMOVED = 'removed';
    public const MODIFIED = 'modified';
    public const RENAMED = 'renamed';
    public const COPIED = 'copied';
    public const CHANGED = 'changed';
    public const UNCHANGED = 'unchanged';
}
