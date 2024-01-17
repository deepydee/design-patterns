<?php

declare(strict_types=1);

namespace Modules\Command\Conceptual\Contracts;

/**
 * Интерфейс Команды объявляет метод для выполнения команд.
 */
interface Command
{
    public function execute(): void;
}
