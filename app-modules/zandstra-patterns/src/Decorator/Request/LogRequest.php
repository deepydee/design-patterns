<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Decorator\Request;

class LogRequest extends DecorateProcess
{
    public function process(RequestHelper $req): void
    {
        echo __CLASS__ . ': logging request...<br>';
        $this->processRequest->process($req);
    }
}
