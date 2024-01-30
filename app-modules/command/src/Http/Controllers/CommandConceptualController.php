<?php

namespace Modules\Command\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Command\Conceptual\Commands\ComplexCommand;
use Modules\Command\Conceptual\Commands\SimpleCommand;
use Modules\Command\Conceptual\Invoker;
use Modules\Command\Conceptual\Receiver;

class CommandConceptualController extends Controller
{
    public function __invoke(Invoker $invoker, Receiver $receiver)
    {
        $invoker->setOnStart(new SimpleCommand('Say Hi!'));
        $invoker->setOnFinish(new ComplexCommand($receiver, 'Send email', 'Save report'));

        $invoker->doSomethingImportant();
    }
}
