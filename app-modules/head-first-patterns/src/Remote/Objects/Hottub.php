<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Remote\Objects;

class Hottub
{
    private bool $on = false;

    private int $temperature = 0;

    public function on(): void
    {
        $this->on = true;
    }

    public function off(): void
    {
        $this->on = false;
    }

    public function bubblesOn(): void
    {
        if ($this->on) {
            echo 'Hottub is bubbling!<br>';
        }
    }

    public function bubblesOff(): void
    {
        if ($this->on) {
            echo 'Hottub is not bubbling!<br>';
        }
    }

    public function jetsOn(): void
    {
        if ($this->on) {
            echo 'Hottub jets!<br>';
        }
    }

    public function jetsOff(): void
    {
        if ($this->on) {
            echo 'Hottub jets are off!<br>';
        }
    }

    public function setTemperature(int $temperature): void
    {
        $this->temperature = $temperature;
    }

    public function heat(): void
    {
        $this->temperature = 105;
        echo 'Hottub is heating to a steaming 105 degrees<br>';
    }

    public function cool(): void
    {
        $this->temperature = 98;
        echo 'Hottub is cooling to 98 degrees<br>';
    }
}
