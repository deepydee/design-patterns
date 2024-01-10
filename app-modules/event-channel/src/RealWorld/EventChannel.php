<?php

declare(strict_types=1);

namespace Modules\EventChannel\RealWorld;

use Modules\EventChannel\RealWorld\Contracts\EventChannel as ContractsEventChannel;
use Modules\EventChannel\RealWorld\Contracts\Subscriber;

class EventChannel implements ContractsEventChannel
{
    private array $topics = [];

    public function subscribe(string $topic, Subscriber $subscriber): void
    {
        $this->topics[$topic][] = $subscriber;
        $msg = "{$subscriber->getName()} подписался на [{$topic}]";

        echo "{$msg}<br>";
    }

    public function publish(string $topic, string $data): void
    {
        if (empty($this->topics[$topic])) {
            return;
        }

        foreach ($this->topics[$topic] as $subscriber) {
            /** @var Subscriber $subscriber */
            $subscriber->notify($data);
        }
    }
}
