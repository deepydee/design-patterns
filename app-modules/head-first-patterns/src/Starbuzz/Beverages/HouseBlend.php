<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Starbuzz\Beverages;

use Modules\HeadFirstPatterns\Starbuzz\Beverage;

class HouseBlend extends Beverage
{
    public function __construct()
    {
        $this->description = 'House Blend Coffee';
    }

    public function cost(): float
    {
        return .89;
    }
}
