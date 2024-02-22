<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Decorator\Request;

class StructureRequest extends DecorateProcess
{
    public function process(RequestHelper $req): void
    {
        echo __CLASS__ . ': structured request data...<br>';
        $this->processRequest->process($req);
    }
}
