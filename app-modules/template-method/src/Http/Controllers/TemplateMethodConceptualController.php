<?php

namespace Modules\TemplateMethod\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\TemplateMethod\Conceptual\AbstractClass;
use Modules\TemplateMethod\Conceptual\ConcreteClass1;
use Modules\TemplateMethod\Conceptual\ConcreteClass2;

class TemplateMethodConceptualController extends Controller
{
    public function __invoke()
    {
        echo 'Same client code can work with different subclasses:<br>';
        $this->clientCode(new ConcreteClass1());
        echo '<br>';

        echo 'Same client code can work with different subclasses:<br>';
        $this->clientCode(new ConcreteClass2());
    }

    /**
     * Клиентский код вызывает шаблонный метод для выполнения алгоритма. Клиентский
     * код не должен знать конкретный класс объекта, с которым работает, при
     * условии, что он работает с объектами через интерфейс их базового класса.
     */
    private function clientCode(AbstractClass $class)
    {
        // ...
        $class->templateMethod();
        // ...
    }
}
