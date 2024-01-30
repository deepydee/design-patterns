<?php

declare(strict_types=1);

namespace Modules\TemplateMethod\Conceptual;

/**
 * Обычно конкретные классы переопределяют только часть операций базового
 * класса.
 */
class ConcreteClass2 extends AbstractClass
{
    protected function requiredOperations1(): void
    {
        echo 'ConcreteClass2 says: Implemented Operation1<br>';
    }

    protected function requiredOperation2(): void
    {
        echo 'ConcreteClass2 says: Implemented Operation2<br>';
    }

    protected function hook1(): void
    {
        echo 'ConcreteClass2 says: Overridden Hook1<br>';
    }
}
