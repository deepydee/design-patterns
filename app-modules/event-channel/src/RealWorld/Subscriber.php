<?php

declare(strict_types=1);

namespace Modules\EventChannel\RealWorld;

use Modules\EventChannel\RealWorld\Contracts\Subscriber as ContractsSubscriber;

class Subscriber implements ContractsSubscriber
{
    public function __construct(private string $name)
    {
    }

    public function notify(string $data): void
    {
        $msg = "{$this->getName()} получил уведомление: [{$data}]";

        echo "{$msg}<br>";
    }

    public function getName(): string
    {
        return $this->name;
    }
}
