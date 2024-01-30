<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\PizzaStore\AbstractFactory\Contracts;

interface Dough
{
    public function toString(): string;
}
