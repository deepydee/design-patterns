<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Remote\Objects;

use Modules\HeadFirstPatterns\Remote\Enums\FanLevel;

class CeilingFan
{
    private FanLevel $speed = FanLevel::OFF;

    public function __construct(private string $location)
    {
    }

    public function high(): void
    {
        $this->speed = FanLevel::HIGH;
        echo "Ceiling fan is on high and at {$this->location}<br>";
    }

    public function medium(): void
    {
        $this->speed = FanLevel::MEDIUM;
        echo "Ceiling fan is on medium and at {$this->location}<br>";
    }

    public function low(): void
    {
        $this->speed = FanLevel::LOW;
        echo "Ceiling fan is on low and at {$this->location}<br>";
    }

    public function off(): void
    {
        $this->speed = FanLevel::OFF;
        echo "Ceiling fan is off and at {$this->location}<br>";
    }

    public function getSpeed(): FanLevel
    {
        return $this->speed;
    }
}
