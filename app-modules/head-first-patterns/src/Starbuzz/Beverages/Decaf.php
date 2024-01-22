<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Starbuzz\Beverages;

use Modules\HeadFirstPatterns\Starbuzz\Beverage;

class Decaf extends Beverage
{
    public function __construct()
    {
        $this->description = 'Decaf Coffee';
    }

    public function cost(): float
    {
        return 1.85;
    }
}
