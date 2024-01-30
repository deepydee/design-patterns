<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients;

use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Cheese;

final class MozzarellaCheese implements Cheese
{
    public function toString(): string
    {
        return 'Shredded Mozzarella';
    }
}
