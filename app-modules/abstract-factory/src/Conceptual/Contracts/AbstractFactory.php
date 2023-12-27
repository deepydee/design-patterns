<?php

declare(strict_types=1);

namespace  Modules\AbstractFactory\Conceptual\Contracts;

use Modules\AbstractFactory\Conceptual\Contracts\AbstractProductA;
use Modules\AbstractFactory\Conceptual\Contracts\AbstractProductB;

/**
 * Интерфейс Абстрактной Фабрики объявляет набор методов, которые возвращают
 * различные абстрактные продукты. Эти продукты называются семейством и связаны
 * темой или концепцией высокого уровня. Продукты одного семейства обычно могут
 * взаимодействовать между собой. Семейство продуктов может иметь несколько
 * вариаций, но продукты одной вариации несовместимы с продуктами другой.
 */
interface AbstractFactory
{
    public function createProductA(): AbstractProductA;

    public function createProductB(): AbstractProductB;
}
