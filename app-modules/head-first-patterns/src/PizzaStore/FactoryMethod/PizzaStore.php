<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\FactoryMethod;

use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Contracts\Pizza;
use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Pizzas\Pizza as AbstractPizza;
use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Enums\PizzaType;


abstract class PizzaStore
{
    public function orderPizza(PizzaType $type): AbstractPizza
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    abstract public function createPizza(PizzaType $type): AbstractPizza;
}
