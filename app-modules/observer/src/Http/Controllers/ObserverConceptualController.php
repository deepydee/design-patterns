<?php

namespace Modules\Observer\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Observer\Conceptual\Observers\ConcreteObserverA;
use Modules\Observer\Conceptual\Observers\ConcreteObserverB;
use Modules\Observer\Conceptual\Subject;

class ObserverConceptualController extends Controller
{
    public function __invoke(Subject $subject, ConcreteObserverA $o1, ConcreteObserverB $o2)
    {
        $subject->attach($o1);
        $subject->attach($o2);

        $subject->someBusinessLogic();
        $subject->someBusinessLogic();

        $subject->detach($o2);

        $subject->someBusinessLogic();
    }
}
