<?php

declare(strict_types=1);

namespace Modules\Mediator\Conceptual\Components;

/**
 * Конкретные Компоненты реализуют различную функциональность. Они не зависят от
 * других компонентов. Они также не зависят от каких-либо конкретных классов
 * посредников.
 */
class Component2 extends BaseComponent
{
    public function doC(): void
    {
        echo "Component 2 does C.<br>";
        $this->mediator->notify($this, "C");
    }

    public function doD(): void
    {
        echo "Component 2 does D.<br>";
        $this->mediator->notify($this, "D");
    }
}
