<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Starbuzz\Condiments;

use Modules\HeadFirstPatterns\Starbuzz\Beverage;
use Modules\HeadFirstPatterns\Starbuzz\CondimentDecorator;

class Mocha extends CondimentDecorator
{
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription().', Mocha';
    }

    public function cost(): float
    {
        return 0.20 + $this->beverage->cost();
    }
}
