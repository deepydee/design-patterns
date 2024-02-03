<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Remote\Objects;

class Stereo
{
    public function __construct(private string $location)
    {
    }

    public function on(): void
    {
        echo "Stereo on at {$this->location}<br>";
    }

    public function off(): void
    {
        echo "Stereo off at {$this->location}<br>";
    }

    public function setCD(): void
    {
        echo "Stereo set CD at {$this->location}<br>";
    }

    public function setDvd(): void
    {
        echo "Stereo set DVD at {$this->location}<br>";
    }

    public function setRadio(): void
    {
        echo "Stereo set radio at {$this->location}<br>";
    }

    public function setVolume(int $volume): void
    {
        echo "Stereo set volume to {$volume} at {$this->location}<br>";
    }
}
