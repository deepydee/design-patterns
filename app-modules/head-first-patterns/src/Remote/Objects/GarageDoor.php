<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Remote\Objects;

class GarageDoor
{
    public function __construct(private string $location)
    {
    }

    public function up(): void
    {
        echo "Garage door is up at {$this->location}<br>";
    }

    public function down(): void
    {
        echo "Garage door is down at {$this->location}<br>";
    }

    public function stop(): void
    {
        echo "Garage door is stopped at {$this->location}<br>";
    }

    public function lightOn(): void
    {
        echo "Garage light is on at {$this->location}<br>";
    }

    public function lightOff(): void
    {
        echo "Garage light is off at {$this->location}<br>";
    }
}
