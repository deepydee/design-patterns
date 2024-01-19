<?php

declare(strict_types=1);

namespace Modules\Mediator\RealWorld;

use Modules\Mediator\RealWorld\EventDispatcher;

/**
 * Простая вспомогательная функция для предоставления глобального доступа к
 * диспетчеру событий.
 */
final class Events
{
    private static ?EventDispatcher $dispatcher = null;

    private function __construct()
    {
    }

    public static function getDispatcher(): EventDispatcher
    {
        return self::$dispatcher ??= new EventDispatcher();
    }

    public function __wakeup()
    {
        throw new \Exception('Cannot unserialize a singleton.');
    }

    private function __clone()
    {
    }
}
