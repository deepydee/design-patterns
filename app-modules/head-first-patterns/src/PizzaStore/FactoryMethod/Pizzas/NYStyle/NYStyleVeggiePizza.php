<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Pizzas\NYStyle;

use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Contracts\Pizza;
use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Pizzas\Pizza as AbstractPizza;

class NYStyleVeggiePizza extends AbstractPizza implements Pizza
{
    public function __construct()
    {
        $this->name = 'Veggie Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';
        $this->toppings = ['Black Olives', 'Spinach', 'Eggplant', 'Sliced Pepperoni'];
    }
}
