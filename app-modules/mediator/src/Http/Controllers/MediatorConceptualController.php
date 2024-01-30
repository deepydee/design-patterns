<?php

namespace Modules\Mediator\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Mediator\Conceptual\Components\Component1;
use Modules\Mediator\Conceptual\Components\Component2;
use Modules\Mediator\Conceptual\Mediators\ConcreteMediator;

class MediatorConceptualController extends Controller
{
    public function __invoke(Component1 $c1, Component2 $c2)
    {
        $mediator = new ConcreteMediator($c1, $c2);

        echo 'Client triggers operation A.<br>';
        $c1->doA();

        echo '<br>';
        echo 'Client triggers operation D.<br>';
        $c2->doD();
    }
}
