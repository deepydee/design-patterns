<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Factories;

use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Cheese;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Clams;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Dough;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Pepperoni;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\PizzaIngredientFactory;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Sauce;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients\FreshClams;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients\Garlic;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients\MarinaraSauce;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients\Mushroom;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients\Onion;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients\RedPepper;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients\ReggianoCheese;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients\SlicedPepperoni;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients\ThinCrustDough;

class NYPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): Dough
    {
        return new ThinCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new MarinaraSauce();
    }

    public function createCheese(): Cheese
    {
        return new ReggianoCheese();
    }

    public function createVeggies(): array
    {
        return [
            new Garlic(),
            new Onion(),
            new Mushroom(),
            new RedPepper(),
        ];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClams(): Clams
    {
        return new FreshClams();
    }
}
