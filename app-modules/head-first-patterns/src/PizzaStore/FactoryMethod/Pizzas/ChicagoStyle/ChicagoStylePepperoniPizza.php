<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Pizzas\ChicagoStyle;

use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Contracts\Pizza;
use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Pizzas\Pizza as AbstractPizza;

class ChicagoStylePepperoniPizza extends AbstractPizza implements Pizza
{
    public function __construct()
    {
        $this->name = 'Pepperoni Pizza';
        $this->dough = 'Crust';
        $this->sauce = 'Marinara Sauce';
        $this->toppings = [
            'Sliced Pepperoni',
            'Sliced Onion',
            'Grated Reggiano Cheese',
        ];
    }
}
