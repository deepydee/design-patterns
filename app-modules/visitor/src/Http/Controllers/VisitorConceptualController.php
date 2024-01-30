<?php

namespace Modules\Visitor\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Visitor\Conceptual\Components\ConcreteComponentA;
use Modules\Visitor\Conceptual\Components\ConcreteComponentB;
use Modules\Visitor\Conceptual\Contracts\Visitor;
use Modules\Visitor\Conceptual\Visitors\ConcreteVisitor1;
use Modules\Visitor\Conceptual\Visitors\ConcreteVisitor2;

class VisitorConceptualController extends Controller
{
    public function __invoke()
    {
        $components = [
            new ConcreteComponentA(),
            new ConcreteComponentB(),
        ];

        echo 'The client code works with all visitors via the base Visitor interface:<br>';
        $visitor1 = new ConcreteVisitor1();
        $this->clientCode($components, $visitor1);
        echo '<br>';

        echo 'It allows the same client code to work with different types of visitors:<br>';
        $visitor2 = new ConcreteVisitor2();
        $this->clientCode($components, $visitor2);
    }

    /**
     * Клиентский код может выполнять операции посетителя над любым набором
     * элементов, не выясняя их конкретных классов. Операция принятия направляет
     * вызов к соответствующей операции в объекте посетителя.
     */
    private function clientCode(array $components, Visitor $visitor)
    {
        // ...
        foreach ($components as $component) {
            $component->accept($visitor);
        }
        // ...
    }
}
