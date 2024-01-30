<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\PizzaStore;

use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Enums\PizzaType;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Pizzas\Pizza;

abstract class PizzaStore
{
    abstract protected function createPizza(PizzaType $type): Pizza;

    public function orderPizza(PizzaType $type): Pizza
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
