<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Factories;

use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Cheese;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Clams;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Dough;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Pepperoni;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\PizzaIngredientFactory;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Sauce;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients\BlackOlives;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients\Eggplant;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients\FrozenClams;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients\MozzarellaCheese;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients\PlumTomatoSauce;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients\SlicedPepperoni;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients\Spinach;
use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients\ThickCrustDough;

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): Dough
    {
        return new ThickCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new PlumTomatoSauce();
    }

    public function createCheese(): Cheese
    {
        return new MozzarellaCheese();
    }

    public function createVeggies(): array
    {
        return [
            new Spinach(),
            new Eggplant(),
            new BlackOlives(),
        ];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClams(): Clams
    {
        return new FrozenClams();
    }
}
