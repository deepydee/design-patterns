<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Starbuzz\Beverages;

use Modules\HeadFirstPatterns\Starbuzz\Beverage;

class Espresso extends Beverage
{
    public function __construct()
    {
        $this->description = 'Espresso';
    }

    public function cost(): float
    {
        return 1.99;
    }
}
