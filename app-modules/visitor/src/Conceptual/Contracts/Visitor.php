<?php

declare(strict_types=1);

namespace Modules\Visitor\Conceptual\Contracts;

use Modules\Visitor\Conceptual\Components\ConcreteComponentA;
use Modules\Visitor\Conceptual\Components\ConcreteComponentB;

/**
 * Интерфейс Посетителя объявляет набор методов посещения, соответствующих
 * классам компонентов. Сигнатура метода посещения позволяет посетителю
 * определить конкретный класс компонента, с которым он имеет дело.
 */
interface Visitor
{
    public function visitConcreteComponentA(ConcreteComponentA $element): void;

    public function visitConcreteComponentB(ConcreteComponentB $element): void;
}
