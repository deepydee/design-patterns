<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients;

use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Veggies;

final class Mushroom implements Veggies
{
    public function toString(): string
    {
        return 'Mushrooms';
    }
}
