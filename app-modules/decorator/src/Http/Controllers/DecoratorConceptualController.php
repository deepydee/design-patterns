<?php

namespace Modules\Decorator\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Decorator\Conceptual\ConcreteComponent;
use Modules\Decorator\Conceptual\ConcreteDecoratorA;
use Modules\Decorator\Conceptual\ConcreteDecoratorB;
use Modules\Decorator\Conceptual\Contracts\Component;

/**
 * Паттерн Декоратор
 *
 * Назначение: Позволяет динамически добавлять объектам новую функциональность,
 * оборачивая их в полезные «обёртки».
 */
class DecoratorConceptualController extends Controller
{
    public function __invoke(Request $request)
    {
        /**
         * Таким образом, клиентский код может поддерживать как простые компоненты...
         */
        $simple = new ConcreteComponent();
        echo "Client: I've got a simple component:<br>";
        $this->clientCode($simple);
        echo '<br><br>';

        /**
         * ...так и декорированные.
         *
         * Обратите внимание, что декораторы могут обёртывать не только простые
         * компоненты, но и другие декораторы.
         */
        $decorator1 = new ConcreteDecoratorA($simple);
        $decorator2 = new ConcreteDecoratorB($decorator1);
        echo "Client: Now I've got a decorated component:<br>";
        $this->clientCode($decorator2);
    }

    /**
     * Клиентский код работает со всеми объектами, используя интерфейс Компонента.
     * Таким образом, он остаётся независимым от конкретных классов компонентов, с
     * которыми работает.
     */
    private function clientCode(Component $component)
    {
        // ...

        echo 'RESULT: '.$component->operation();

        // ...
    }
}
