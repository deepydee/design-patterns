<?php

declare(strict_types=1);

namespace Modules\Mediator\RealWorld;

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

    /**
     * Все объекты могут вызывать события.
     */
    public function delete(): void
    {
        echo 'User: I can now delete myself without worrying about the repository.<br>';
        Events::getDispatcher()->trigger('users:deleted', $this, $this);
    }
}
