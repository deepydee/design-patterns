<?php

declare(strict_types=1);

namespace  Modules\AbstractFactory\Conceptual\Contracts;

/**
 * Каждый отдельный продукт семейства продуктов должен иметь базовый интерфейс.
 * Все вариации продукта должны реализовывать этот интерфейс.
 */
interface AbstractProductA
{
    public function usefulFunctionA(): string;
}
