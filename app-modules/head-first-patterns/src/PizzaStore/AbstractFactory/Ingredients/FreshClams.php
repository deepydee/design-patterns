<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Ingredients;

use Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts\Clams;

final class FreshClams implements Clams
{
    public function toString(): string
    {
        return 'Fresh Clams from Long Island Sound';
    }
}
