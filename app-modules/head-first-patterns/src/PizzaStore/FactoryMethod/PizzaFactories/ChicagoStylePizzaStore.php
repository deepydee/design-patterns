<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\PizzaFactories;

use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Contracts\Pizza;
use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Pizzas\Pizza as AbstractPizza;
use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Enums\PizzaType;
use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Pizzas\ChicagoStyle\ChicagoStyleCheesePizza;
use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Pizzas\ChicagoStyle\ChicagoStyleClamPizza;
use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Pizzas\ChicagoStyle\ChicagoStylePepperoniPizza;
use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\Pizzas\ChicagoStyle\ChicagoStyleVeggiePizza;
use Modules\HeadFirstPatterns\PizzaStore\FactoryMethod\PizzaStore;

class ChicagoStylePizzaStore extends PizzaStore
{
    public function createPizza(PizzaType $type): AbstractPizza
    {
        return match ($type) {
            PizzaType::CHEESE => new ChicagoStyleCheesePizza(),
            PizzaType::CLAM => new ChicagoStyleClamPizza(),
            PizzaType::VEGGIE => new ChicagoStyleVeggiePizza(),
            PizzaType::PEPPERONI => new ChicagoStylePepperoniPizza(),
            default => throw new \InvalidArgumentException('Invalid pizza type')
        };
    }
}