<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts;

interface PizzaIngredientFactory
{
    public function createDough(): Dough;

    public function createSauce(): Sauce;

    public function createCheese(): Cheese;

    /** @return Veggies[]  */
    public function createVeggies(): array;

    public function createPepperoni(): Pepperoni;

    public function createClams(): Clams;
}
