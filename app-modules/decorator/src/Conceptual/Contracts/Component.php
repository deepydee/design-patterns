<?php

declare(strict_types=1);

namespace Modules\Decorator\Conceptual\Contracts;

/**
 * Базовый интерфейс Компонента определяет поведение, которое изменяется
 * декораторами.
 */
interface Component
{
    public function operation(): string;
}
