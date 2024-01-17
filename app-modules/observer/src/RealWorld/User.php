<?php

declare(strict_types=1);

namespace Modules\Observer\RealWorld;

/**
 * Давайте сохраним класс Пользователя тривиальным, так как он не является
 * главной темой нашего примера.
 */
class User
{
    public array $attributes = [];

    public function update($data): void
    {
        $this->attributes = array_merge($this->attributes, $data);
    }
}
