<?php

declare(strict_types=1);

namespace Modules\Mediator\Conceptual\Mediators;

use Modules\Mediator\Conceptual\Components\Component1;
use Modules\Mediator\Conceptual\Components\Component2;
use Modules\Mediator\Conceptual\Contracts\Mediator;

/**
 * Конкретные Посредники реализуют совместное поведение, координируя отдельные
 * компоненты.
 */
class ConcreteMediator implements Mediator
{
    public function __construct(
        private Component1 $component1,
        private Component2 $component2
    ) {
        $this->component1->setMediator($this);
        $this->component2->setMediator($this);
    }

    public function notify(object $sender, string $event): void
    {
        if ($event == "A") {
            echo "Mediator reacts on A and triggers following operations:<br>";
            $this->component2->doC();
        }

        if ($event == "D") {
            echo "Mediator reacts on D and triggers following operations:<br>";
            $this->component1->doB();
            $this->component2->doC();
        }
    }
}
