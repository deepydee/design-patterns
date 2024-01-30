<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients;

use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Veggies;

final class RedPepper implements Veggies
{
    public function toString(): string
    {
        return 'Red Pepper';
    }
}
