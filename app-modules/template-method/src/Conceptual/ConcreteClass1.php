<?php

declare(strict_types=1);

namespace Modules\TemplateMethod\Conceptual;

/**
 * Конкретные классы должны реализовать все абстрактные операции базового
 * класса. Они также могут переопределить некоторые операции с реализацией по
 * умолчанию.
 */
class ConcreteClass1 extends AbstractClass
{
    protected function requiredOperations1(): void
    {
        echo 'ConcreteClass1 says: Implemented Operation1<br>';
    }

    protected function requiredOperation2(): void
    {
        echo 'ConcreteClass1 says: Implemented Operation2<br>';
    }
}
