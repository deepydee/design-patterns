<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\SimpleFactory;

use Modules\HeadFirstPatterns\PizzaStore\SimpleFactory\Contracts\Pizza;
use Modules\HeadFirstPatterns\PizzaStore\SimpleFactory\Enums\PizzaType;
use Modules\HeadFirstPatterns\PizzaStore\SimpleFactory\SimplePizzaFactory;


class PizzaStore
{
    public function __construct(protected SimplePizzaFactory $factory)
    {
    }

    public function orderPizza(PizzaType $type): Pizza
    {
        $pizza = $this->factory->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
