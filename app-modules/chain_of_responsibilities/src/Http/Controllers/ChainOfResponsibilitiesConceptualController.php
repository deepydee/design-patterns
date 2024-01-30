<?php

declare(strict_types=1);

namespace Modules\ChainOfResponsibilities\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\ChainOfResponsibilities\Conceptual\Contracts\Handler;
use Modules\ChainOfResponsibilities\Conceptual\Handlers\DogHandler;
use Modules\ChainOfResponsibilities\Conceptual\Handlers\MonkeyHandler;
use Modules\ChainOfResponsibilities\Conceptual\Handlers\SquirrelHandler;

class ChainOfResponsibilitiesConceptualController extends Controller
{
    public function __invoke()
    {
        /**
         * Другая часть клиентского кода создает саму цепочку.
         */
        $monkey = new MonkeyHandler();
        $squirrel = new SquirrelHandler();
        $dog = new DogHandler();

        $monkey
            ->setNext($squirrel)
            ->setNext($dog);

        /**
         * Клиент должен иметь возможность отправлять запрос любому обработчику, а не
         * только первому в цепочке.
         */
        echo 'Chain: Monkey > Squirrel > Dog<br><br>';
        $this->clientCode($monkey);
        echo '<br>';

        echo 'Subchain: Squirrel > Dog<br><br>';
        $this->clientCode($squirrel);
    }

    /**
     * Обычно клиентский код приспособлен для работы с единственным обработчиком. В
     * большинстве случаев клиенту даже неизвестно, что этот обработчик является
     * частью цепочки.
     */
    private function clientCode(Handler $handler)
    {
        foreach (['Nut', 'Banana', 'Cup of coffee', 'MeatBall'] as $food) {
            echo 'Client: Who wants a '.$food.'?<br>';

            $result = $handler->handle($food);

            if ($result) {
                echo '  '.$result;
            } else {
                echo '  '.$food.' was left untouched.<br>';
            }
        }
    }
}
