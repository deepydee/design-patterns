<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Strategy;

class MarkerParse
{
    public function __construct(protected string $test)
    {
    }

    public function evaluate(string $response): bool
    {
        return $this->test === $response;
    }
}
