<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients;

use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Cheese;

final class ParmesanCheese implements Cheese
{
    public function toString(): string
    {
        return 'Shredded Parmesan';
    }
}
