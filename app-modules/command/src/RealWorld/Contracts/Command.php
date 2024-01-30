<?php

declare(strict_types=1);

namespace Modules\Command\RealWorld\Contracts;

/**
 * Интерфейс Команды объявляет основной метод выполнения, а также несколько
 * вспомогательных методов для получения метаданных команды.
 */
interface Command
{
    public function execute(): void;

    public function getId(): int;

    public function getStatus(): int;
}
