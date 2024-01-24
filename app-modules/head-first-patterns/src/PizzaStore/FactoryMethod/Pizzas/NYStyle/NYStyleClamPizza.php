<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Pizzas\NYStyle;

use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Contracts\Pizza;
use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Pizzas\Pizza as AbstractPizza;

class NYStyleClamPizza extends AbstractPizza implements Pizza
{
    public function __construct()
    {
        $this->name = 'Clam Pizza';
        $this->dough = 'Thin Crust';
        $this->sauce = 'White garlic sauce';
        $this->toppings = ['Grated parmesan cheese'];
    }
}
