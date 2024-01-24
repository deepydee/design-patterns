<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\SimpleFactory\Pizzas;

use Modules\HeadFirstPatterns\PizzaStore\SimpleFactory\Contracts\Pizza;

class CheesePizza implements Pizza
{
    public function bake(): void
    {
        echo 'Cheese Pizza is baked <br>';
    }

    public function box(): void
    {
        echo 'Cheese Pizza is boxed <br>';
    }

    public function cut(): void
    {
        echo 'Cheese Pizza is cut <br>';
    }

    public function prepare(): void
    {
        echo 'Cheese Pizza is prepared <br>';
    }
}
