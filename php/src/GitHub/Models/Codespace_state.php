<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Enum;

class Codespace_state extends Enum {
    public const UNKNOWN = 'Unknown';
    public const CREATED = 'Created';
    public const QUEUED = 'Queued';
    public const PROVISIONING = 'Provisioning';
    public const AVAILABLE = 'Available';
    public const AWAITING = 'Awaiting';
    public const UNAVAILABLE = 'Unavailable';
    public const DELETED = 'Deleted';
    public const MOVED = 'Moved';
    public const SHUTDOWN = 'Shutdown';
    public const ARCHIVED = 'Archived';
    public const STARTING = 'Starting';
    public const SHUTTING_DOWN = 'ShuttingDown';
    public const FAILED = 'Failed';
    public const EXPORTING = 'Exporting';
    public const UPDATING = 'Updating';
    public const REBUILDING = 'Rebuilding';
}
