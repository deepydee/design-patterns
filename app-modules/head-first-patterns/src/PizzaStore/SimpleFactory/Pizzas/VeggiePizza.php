<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\SimpleFactory\Pizzas;

use Modules\HeadFirstPatterns\PizzaStore\SimpleFactory\Contracts\Pizza;

class VeggiePizza implements Pizza
{
    public function bake(): void
    {
        echo 'Veggie Pizza is baked <br>';
    }

    public function box(): void
    {
        echo 'Veggie Pizza is boxed <br>';
    }

    public function cut(): void
    {
        echo 'Veggie Pizza is cut <br>';
    }

    public function prepare(): void
    {
        echo 'Veggie Pizza is prepared <br>';
    }
}
