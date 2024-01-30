<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients;

use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Clams;

final class FrozenClams implements Clams
{
    public function toString(): string
    {
        return 'Frozen Clams from Chesapeake Bay';
    }
}
