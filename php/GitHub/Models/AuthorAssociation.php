<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AuthorAssociation extends Enum {
    public const C_O_L_L_A_B_O_R_A_T_O_R = 'COLLABORATOR';
    public const C_O_N_T_R_I_B_U_T_O_R = 'CONTRIBUTOR';
    public const F_I_R_S_T__T_I_M_E_R = 'FIRST_TIMER';
    public const F_I_R_S_T__T_I_M_E__C_O_N_T_R_I_B_U_T_O_R = 'FIRST_TIME_CONTRIBUTOR';
    public const M_A_N_N_E_Q_U_I_N = 'MANNEQUIN';
    public const M_E_M_B_E_R = 'MEMBER';
    public const N_O_N_E = 'NONE';
    public const O_W_N_E_R = 'OWNER';
}
