<?php

declare(strict_types=1);

namespace Modules\Visitor\Conceptual\Components;

use Modules\Visitor\Conceptual\Contracts\Component;
use Modules\Visitor\Conceptual\Contracts\Visitor;

/**
 * Каждый Конкретный Компонент должен реализовать метод accept таким образом,
 * чтобы он вызывал метод посетителя, соответствующий классу компонента.
 */
class ConcreteComponentB implements Component
{
    /**
     * То же самое здесь: visitConcreteComponentB => ConcreteComponentB
     */
    public function accept(Visitor $visitor): void
    {
        $visitor->visitConcreteComponentB($this);
    }

    public function specialMethodOfConcreteComponentB(): string
    {
        return 'B';
    }
}
