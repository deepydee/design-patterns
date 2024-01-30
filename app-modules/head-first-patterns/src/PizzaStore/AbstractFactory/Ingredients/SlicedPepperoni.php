<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients;

use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Pepperoni;

final class SlicedPepperoni implements Pepperoni
{
    public function toString(): string
    {
        return 'Sliced Pepperoni';
    }
}
