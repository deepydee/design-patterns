<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\SimpleFactory\Pizzas;

use Modules\HeadFirstPatterns\PizzaStore\SimpleFactory\Contracts\Pizza;

class ClamPizza implements Pizza
{
    public function bake(): void
    {
        echo 'Clam Pizza is baked <br>';
    }

    public function box(): void
    {
        echo 'Clam Pizza is boxed <br>';
    }

    public function cut(): void
    {
        echo 'Clam Pizza is cut <br>';
    }

    public function prepare(): void
    {
        echo 'Clam Pizza is prepared <br>';
    }
}
