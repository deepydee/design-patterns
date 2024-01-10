<?php

declare(strict_types=1);

namespace Modules\Singleton\RealWorld;

use Modules\Singleton\Conceptual\Singleton;

/**
 * Применение паттерна Одиночка в хранилище настроек – тоже обычная практика.
 * Часто требуется получить доступ к настройкам приложений из самых разных мест
 * программы. Одиночка предоставляет это удобство.
 */
class Config extends Singleton
{
    private array $hashmap = [];

    public function getValue(string $key): string
    {
        return $this->hashmap[$key];
    }

    public function setValue(string $key, string $value): void
    {
        $this->hashmap[$key] = $value;
    }
}
