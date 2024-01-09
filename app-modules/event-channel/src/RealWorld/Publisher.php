<?php

declare(strict_types=1);

namespace Modules\EventChannel\RealWorld;

use Modules\EventChannel\RealWorld\Contracts\EventChannel;
use Modules\EventChannel\RealWorld\Contracts\Publisher as ContractsPublisher;

class Publisher implements ContractsPublisher
{
    public function __construct(private string $topic, private EventChannel $eventChannel)
    {
    }

    public function publish(string $topic, string $data): void
    {
        $this->eventChannel->publish($this->topic, $data);
    }
}
