<?php

declare(strict_types=1);

namespace Modules\FactoryMethod\Conceptual;

use Modules\FactoryMethod\Conceptual\Contracts\Product;
use Modules\FactoryMethod\Conceptual\Creator;
use Modules\FactoryMethod\Conceptual\Products\ConcreteProduct1;

/**
 * Конкретные Создатели переопределяют фабричный метод для того, чтобы изменить
 * тип результирующего продукта.
 */
final class ConcreteCreator1 extends Creator
{
    /**
     * Обратите внимание, что сигнатура метода по-прежнему использует тип
     * абстрактного продукта, хотя фактически из метода возвращается конкретный
     * продукт. Таким образом, Создатель может оставаться независимым от
     * конкретных классов продуктов.
     */
    public function factoryMethod(): Product
    {
        return new ConcreteProduct1();
    }
}
