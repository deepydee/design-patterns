<?php

declare(strict_types=1);

namespace Modules\StaticFactory\Contracts;

use Modules\StaticFactory\Contracts\Messenger;
use Modules\StaticFactory\Enums\MessageType;

interface MessengerStaticFactory
{
    public static function build(MessageType $type): Messenger;
}
