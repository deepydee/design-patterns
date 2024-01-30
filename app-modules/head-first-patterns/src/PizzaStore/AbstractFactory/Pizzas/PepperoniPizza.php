<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Pizzas;

use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\PizzaIngredientFactory;

final class PepperoniPizza extends Pizza
{

    public function __construct(private PizzaIngredientFactory $ingredientFactory)
    {
    }

    public function prepare(): void
    {
        echo "Preparing " . $this->name . "<br>";
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->veggies = $this->ingredientFactory->createVeggies();
        $this->pepperoni = $this->ingredientFactory->createPepperoni();
    }
}
