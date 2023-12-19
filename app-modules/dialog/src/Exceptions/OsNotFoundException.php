<?php

declare(strict_types=1);

namespace Modules\Dialog\Exceptions;

class OsNotFoundException extends \Exception
{
    protected $message = 'Error! Unknown operating system.';
}
