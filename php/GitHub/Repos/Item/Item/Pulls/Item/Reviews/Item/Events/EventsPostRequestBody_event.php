<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls\Item\Reviews\Item\Events;

use Microsoft\Kiota\Abstractions\Enum;

class EventsPostRequestBody_event extends Enum {
    public const A_P_P_R_O_V_E = 'APPROVE';
    public const R_E_Q_U_E_S_T__C_H_A_N_G_E_S = 'REQUEST_CHANGES';
    public const C_O_M_M_E_N_T = 'COMMENT';
}
