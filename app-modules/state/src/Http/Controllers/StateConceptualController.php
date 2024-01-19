<?php

namespace Modules\State\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\State\Conceptual\Context;
use Modules\State\Conceptual\States\ConcreteStateA;

class StateConceptualController extends Controller
{
    public function __invoke()
    {
        $context = new Context(new ConcreteStateA());
        $context->request1();
        $context->request2();
    }
}
