<?php

declare(strict_types=1);

namespace Modules\EventChannel\RealWorld\Contracts;

/**
 * Интерфейс канала событий.
 * Связующеезвено между подписчиками и издателями.
 */
interface EventChannel
{
    /**
     * Издатель уведомляет канал о том, что надо
     * всех кто подписан на тему $topic уведомить данными $data
     */
    public function publish(string $topic, string $data): void;

    /**
     * Подписчик $subscriber подписывается на событие $topic
     */
    public function subscribe(string $topic, Subscriber $subscriber): void;
}
