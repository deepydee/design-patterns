<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients;

use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Sauce;

final class PlumTomatoSauce implements Sauce
{
    public function toString(): string
    {
        return 'Tomato sauce with plum tomatoes';
    }
}
