<?php

declare(strict_types=1);

namespace Modules\StaticFactory\Enums;

enum MessageType
{
    case Email;
    case Sms;
}
