<?php

namespace Baywet\Githubtododemo\Microsoftgraph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WellknownListName extends Enum {
    public const NONE = 'none';
    public const DEFAULT_LIST = 'defaultList';
    public const FLAGGED_EMAILS = 'flaggedEmails';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}