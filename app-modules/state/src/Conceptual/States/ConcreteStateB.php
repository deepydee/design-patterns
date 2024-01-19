<?php

declare(strict_types=1);

namespace Modules\State\Conceptual\States;

use Modules\State\Conceptual\State;
use Modules\State\Conceptual\States\ConcreteStateA;

class ConcreteStateB extends State
{
    public function handle1(): void
    {
        echo "ConcreteStateB handles request1.<br>";
    }

    public function handle2(): void
    {
        echo "ConcreteStateB handles request2.<br>";
        echo "ConcreteStateB wants to change the state of the context.<br>";
        $this->context->transitionTo(new ConcreteStateA());
    }
}
