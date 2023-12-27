<?php

declare(strict_types=1);

namespace Modules\AbstractFactory\Conceptual\Factories;

use Modules\AbstractFactory\Conceptual\Contracts\AbstractFactory;
use Modules\AbstractFactory\Conceptual\Contracts\AbstractProductA;
use Modules\AbstractFactory\Conceptual\Contracts\AbstractProductB;
use Modules\AbstractFactory\Conceptual\Products\ConcreteProductA1;
use Modules\AbstractFactory\Conceptual\Products\ConcreteProductB1;

/**
 * Конкретная Фабрика производит семейство продуктов одной вариации. Фабрика
 * гарантирует совместимость полученных продуктов. Обратите внимание, что
 * сигнатуры методов Конкретной Фабрики возвращают абстрактный продукт, в то
 * время как внутри метода создается экземпляр конкретного продукта.
 */
final class ConcreteFactory1 implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA1();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB1();
    }
}
