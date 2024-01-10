<?php

namespace Modules\AbstractFactory\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\AbstractFactory\Conceptual\Contracts\AbstractFactory;
use Modules\AbstractFactory\Conceptual\Factories\ConcreteFactory1;
use Modules\AbstractFactory\Conceptual\Factories\ConcreteFactory2;

class AbstractFactoryConceptualController extends Controller
{
    /**
     * Клиентский код может работать с любым конкретным классом фабрики.
     */
    public function __invoke()
    {
        echo "Client: Testing client code with the first factory type:\n";
        $this->clientCode(new ConcreteFactory1());

        echo "\n";

        echo "Client: Testing the same client code with the second factory type:\n";
        $this->clientCode(new ConcreteFactory2());
    }

    /**
     * Клиентский код работает с фабриками и продуктами только через абстрактные
     * типы: Абстрактная Фабрика и Абстрактный Продукт. Это позволяет передавать
     * любой подкласс фабрики или продукта клиентскому коду, не нарушая его.
     */
    private function clientCode(AbstractFactory $factory): void
    {
        $productA = $factory->createProductA();
        $productB = $factory->createProductB();

        echo $productB->usefulFunctionB() . "\n";
        echo $productB->anotherUsefulFunctionB($productA) . "\n";
    }
}
