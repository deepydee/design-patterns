<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Starbuzz\Beverages;

use Modules\HeadFirstPatterns\Starbuzz\Beverage;

class DarkRoast extends Beverage
{
    public function __construct()
    {
        $this->description = 'Dark Roast Coffee';
    }

    public function cost(): float
    {
        return .99;
    }
}
