<?php

declare(strict_types=1);

namespace Modules\Bridge\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Bridge\Conceptual\Abstraction;
use Modules\Bridge\Conceptual\ExtendedAbstraction;
use Modules\Bridge\Conceptual\Implementations\ConcreteImplementationA;
use Modules\Bridge\Conceptual\Implementations\ConcreteImplementationB;

/**
 * Паттерн Мост
 *
 * Назначение: Разделяет один или несколько классов на две отдельные иерархии —
 * абстракцию и реализацию, позволяя изменять их независимо друг от друга.
 *
 *               A
 *            /     \                        A         N
 *          Aa      Ab        ===>        /     \     / \
 *         / \     /  \                 Aa(N) Ab(N)  1   2
 *       Aa1 Aa2  Ab1 Ab2
 */
class BridgeConceptualController extends Controller
{
    /**
     * Клиентский код должен работать с любой предварительно сконфигурированной
     * комбинацией абстракции и реализации.
     */
    public function __invoke()
    {
        $implementation = new ConcreteImplementationA();
        $abstraction = new Abstraction($implementation);
        $this->clientCode($abstraction);

        echo "<br>";

        $implementation = new ConcreteImplementationB();
        $abstraction = new ExtendedAbstraction($implementation);
        $this->clientCode($abstraction);
    }

    /**
     * За исключением этапа инициализации, когда объект Абстракции связывается с
     * определённым объектом Реализации, клиентский код должен зависеть только от
     * класса Абстракции. Таким образом, клиентский код может поддерживать любую
     * комбинацию абстракции и реализации.
     */
    private function clientCode(Abstraction $abstraction)
    {
        // ...

        echo $abstraction->operation();

        // ...
    }
}
