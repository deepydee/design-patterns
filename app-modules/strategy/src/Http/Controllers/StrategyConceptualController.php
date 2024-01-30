<?php

namespace Modules\Strategy\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Strategy\Conceptual\Context;
use Modules\Strategy\Conceptual\Strategies\ConcreteStrategyA;
use Modules\Strategy\Conceptual\Strategies\ConcreteStrategyB;

/**
 * Паттерн Стратегия
 *
 * Назначение: Определяет семейство схожих алгоритмов и помещает каждый из них в
 * собственный класс, после чего алгоритмы можно взаимозаменять прямо во время
 * исполнения программы.
 */
class StrategyConceptualController extends Controller
{
    public function __invoke()
    {
        /**
         * Клиентский код выбирает конкретную стратегию и передаёт её в контекст. Клиент
         * должен знать о различиях между стратегиями, чтобы сделать правильный выбор.
         */
        $context = new Context(new ConcreteStrategyA());
        echo 'Client: Strategy is set to normal sorting.<br>';
        $context->doSomeBusinessLogic();

        echo '<br>';

        echo 'Client: Strategy is set to reverse sorting.<br>';
        $context->setStrategy(new ConcreteStrategyB());
        $context->doSomeBusinessLogic();
    }
}
