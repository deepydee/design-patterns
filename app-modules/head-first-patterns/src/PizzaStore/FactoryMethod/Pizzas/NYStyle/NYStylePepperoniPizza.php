<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Pizzas\NYStyle;

use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Contracts\Pizza;
use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Pizzas\Pizza as AbstractPizza;

class NYStylePepperoniPizza extends AbstractPizza implements Pizza
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
