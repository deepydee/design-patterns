<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Decorator\Request;

use Modules\ZandstraPatterns\Decorator\Request\RequestHelper;

class MainProcess extends ProcessRequest
{
    public function process(RequestHelper $req): void
    {
        echo __CLASS__ . ': making request...<br>';
    }
}
