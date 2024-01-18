<?php

declare(strict_types=1);

namespace Modules\Visitor\Conceptual\Components;

use Modules\Visitor\Conceptual\Contracts\Component;
use Modules\Visitor\Conceptual\Contracts\Visitor;

/**
 * Каждый Конкретный Компонент должен реализовать метод accept таким образом,
 * чтобы он вызывал метод посетителя, соответствующий классу компонента.
 */
class ConcreteComponentA implements Component
{
    /**
     * Обратите внимание, мы вызываем visitConcreteComponentA, что соответствует
     * названию текущего класса. Таким образом мы позволяем посетителю узнать, с
     * каким классом компонента он работает.
     */
    public function accept(Visitor $visitor): void
    {
        $visitor->visitConcreteComponentA($this);
    }

    /**
     * Конкретные Компоненты могут иметь особые методы, не объявленные в их
     * базовом классе или интерфейсе. Посетитель всё же может использовать эти
     * методы, поскольку он знает о конкретном классе компонента.
     */
    public function exclusiveMethodOfConcreteComponentA(): string
    {
        return 'A';
    }
}
