<?php

declare(strict_types=1);

namespace Modules\AbstractFactory\Conceptual\Products;

use Modules\AbstractFactory\Conceptual\Contracts\AbstractProductA;

/**
 * Конкретные продукты создаются соответствующими Конкретными Фабриками.
 */
final class ConcreteProductA1 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return 'The result of the product A1.';
    }
}
