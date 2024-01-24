<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\SimpleFactory;

use Modules\HeadFirstPatterns\PizzaStore\SimpleFactory\Contracts\Pizza;
use Modules\HeadFirstPatterns\PizzaStore\SimpleFactory\Enums\PizzaType;
use Modules\HeadFirstPatterns\PizzaStore\SimpleFactory\Pizzas\CheesePizza;
use Modules\HeadFirstPatterns\PizzaStore\SimpleFactory\Pizzas\ClamPizza;
use Modules\HeadFirstPatterns\PizzaStore\SimpleFactory\Pizzas\PepperoniPizza;
use Modules\HeadFirstPatterns\PizzaStore\SimpleFactory\Pizzas\VeggiePizza;

class SimplePizzaFactory
{
    public function createPizza(PizzaType $type): Pizza
    {
        return match ($type) {
            PizzaType::CHEESE => new CheesePizza(),
            PizzaType::CLAM => new ClamPizza(),
            PizzaType::VEGGIE => new VeggiePizza(),
            PizzaType::PEPPERONI => new PepperoniPizza(),
            default => throw new \InvalidArgumentException('Invalid pizza type')
        };
    }
}
