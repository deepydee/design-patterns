<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients;

use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Veggies;

final class Garlic implements Veggies
{
    public function toString(): string
    {
        return 'Garlic';
    }
}
