<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Decorator\Request;

use Modules\ZandstraPatterns\Decorator\Request\RequestHelper;

abstract class ProcessRequest
{
    abstract public function process(RequestHelper $req): void;
}
