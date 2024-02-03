<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Remote\Objects;

class TV
{
    private int $channel;

    public function __construct(private string $location)
    {
    }

    public function on(): void
    {
        echo "TV on at {$this->location}<br>";
    }

    public function off(): void
    {
        echo "TV off at {$this->location}<br>";
    }

    public function setInputChannel(int $channel): void
    {
        $this->channel = $channel;
        echo "Channel $this->channel set for TV at {$this->location}<br>";
    }
}
