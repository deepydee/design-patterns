<?php

declare(strict_types=1);

namespace Modules\Dialog\Factories;

use Modules\Dialog\Entities\Dialog;
use Modules\Dialog\Entities\WebDialog;
use Modules\Dialog\Entities\WindowDialog;
use Modules\Dialog\Enums\OS;
use Modules\Dialog\Exceptions\OsNotFoundException;

final class DialogFactory
{
    public static function instance(OS $os): Dialog
    {
        return match ($os) {
            OS::Web => new WebDialog(),
            OS::Windows => new WindowDialog(),
            default => throw new OsNotFoundException(),
        };
    }
}
