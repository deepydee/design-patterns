<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Decorator\Request;

abstract class DecorateProcess extends ProcessRequest
{
    public function __construct(protected ProcessRequest $processRequest)
    {
    }
}
