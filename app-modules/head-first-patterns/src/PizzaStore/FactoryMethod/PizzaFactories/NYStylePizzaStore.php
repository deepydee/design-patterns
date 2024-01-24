<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\PizzaFactories;

use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Contracts\Pizza;
use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Pizzas\Pizza as AbstractPizza;
use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Enums\PizzaType;
use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Pizzas\NYStyle\NYStyleCheesePizza;
use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Pizzas\NYStyle\NYStyleClamPizza;
use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Pizzas\NYStyle\NYStylePepperoniPizza;
use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Pizzas\NYStyle\NYStyleVeggiePizza;
use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\PizzaStore;

class NYStylePizzaStore extends PizzaStore
{
    public function createPizza(PizzaType $type): AbstractPizza
    {
        return match ($type) {
            PizzaType::CHEESE => new NYStyleCheesePizza(),
            PizzaType::CLAM => new NYStyleClamPizza(),
            PizzaType::VEGGIE => new NYStyleVeggiePizza(),
            PizzaType::PEPPERONI => new NYStylePepperoniPizza(),
            default => throw new \InvalidArgumentException('Invalid pizza type')
        };
    }
}