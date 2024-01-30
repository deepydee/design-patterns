<?php

declare(strict_types=1);

namespace Modules\EventChannel\RealWorld\Contracts;

interface Subscriber
{
    /**
     * Уведомление подписчика
     */
    public function notify(string $data): void;

    public function getName(): string;
}
