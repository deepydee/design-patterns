<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Observer\Enums;

enum LoginStatus: int
{
    case LOGIN_USER_UNKNOWN = 1;
    case LOGIN_WRONG_PASS = 2;
    case LOGIN_ACCESS = 3;
}
