<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Decorator\Request;

class AuthenticateRequest extends DecorateProcess
{
    public function process(RequestHelper $req): void
    {
        echo __CLASS__ . ': auth request...<br>';
        $this->processRequest->process($req);
    }
}
