<?php

declare(strict_types=1);

namespace Modules\Visitor\Conceptual\Visitors;

use Modules\Visitor\Conceptual\Components\ConcreteComponentA;
use Modules\Visitor\Conceptual\Components\ConcreteComponentB;
use Modules\Visitor\Conceptual\Contracts\Visitor;

/**
 * Конкретные Посетители реализуют несколько версий одного и того же алгоритма,
 * которые могут работать со всеми классами конкретных компонентов.
 *
 * Максимальную выгоду от паттерна Посетитель вы почувствуете, используя его со
 * сложной структурой объектов, такой как дерево Компоновщика. В этом случае
 * было бы полезно хранить некоторое промежуточное состояние алгоритма при
 * выполнении методов посетителя над различными объектами структуры.
 */
class ConcreteVisitor2 implements Visitor
{
    public function visitConcreteComponentA(ConcreteComponentA $element): void
    {
        echo $element->exclusiveMethodOfConcreteComponentA().' + ConcreteVisitor2<br>';
    }

    public function visitConcreteComponentB(ConcreteComponentB $element): void
    {
        echo $element->specialMethodOfConcreteComponentB().' + ConcreteVisitor2<br>';
    }
}
