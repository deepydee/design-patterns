<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\SimpleFactory\Pizzas;

use Modules\HeadFirstPatterns\PizzaStore\SimpleFactory\Contracts\Pizza;

class PepperoniPizza implements Pizza
{
    public function bake(): void
    {
        echo 'Pepperoni Pizza is baked <br>';
    }

    public function box(): void
    {
        echo 'Pepperoni Pizza is boxed <br>';
    }

    public function cut(): void
    {
        echo 'Pepperoni Pizza is cut <br>';
    }

    public function prepare(): void
    {
        echo 'Pepperoni Pizza is prepared <br>';
    }
}
