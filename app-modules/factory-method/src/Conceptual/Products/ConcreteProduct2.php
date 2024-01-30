<?php

declare(strict_types=1);

namespace Modules\FactoryMethod\Conceptual\Products;

use Modules\FactoryMethod\Conceptual\Contracts\Product;

/**
 * Конкретные Продукты предоставляют различные реализации интерфейса Продукта.
 */
final class ConcreteProduct2 implements Product
{
    public function operation(): string
    {
        return '{Result of the ConcreteProduct2}';
    }
}
