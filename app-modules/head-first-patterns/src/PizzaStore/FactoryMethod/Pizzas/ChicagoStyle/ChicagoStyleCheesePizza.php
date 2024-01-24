<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Pizzas\ChicagoStyle;

use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Contracts\Pizza;
use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Pizzas\Pizza as AbstractPizza;

class ChicagoStyleCheesePizza extends AbstractPizza implements Pizza
{
    public function __construct()
    {
        $this->name = 'Chicago Style Deep Dish Cheese Pizza';
        $this->dough = 'Extra Thick Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';
        $this->toppings = ['Shredded Mozzarella Cheese'];
    }
}
