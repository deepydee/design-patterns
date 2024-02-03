<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Remote\Objects;

class Light
{
    public function __construct(private string $location)
    {
    }

    public function on(): void
    {
        echo "Light on at {$this->location}<br>";
    }

    public function off(): void
    {
        echo "Light off at {$this->location}<br>";
    }
}
