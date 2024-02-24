<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Strategy\Marker;

abstract class Marker
{
    public function __construct(protected string $test)
    {
    }

    abstract public function mark(string $response): bool;
}
