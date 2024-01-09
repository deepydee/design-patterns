<?php

declare(strict_types=1);

namespace Modules\EventChannel\RealWorld\Contracts;

interface Publisher
{
    /**
     * Издатель уведомляет канал о том, что надо
     * всех кто подписан на тему $topic уведомить данными $data
     */
    public function publish(string $topic, string $data): void;
}
