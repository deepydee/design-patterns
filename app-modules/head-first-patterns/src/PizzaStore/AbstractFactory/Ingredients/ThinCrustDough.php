<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients;

use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Dough;

final class ThinCrustDough implements Dough
{
    public function toString(): string
    {
        return 'Thin Crust Dough';
    }
}
