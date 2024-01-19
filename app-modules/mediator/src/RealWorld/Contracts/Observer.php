<?php

declare(strict_types=1);

namespace Modules\Mediator\RealWorld\Contracts;

/**
 * Интерфейс Наблюдателя определяет, как компоненты получают уведомления о
 * событиях.
 */
interface Observer
{
    public function update(string $event, object $emitter, $data = null);
}
