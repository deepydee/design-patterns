<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Starbuzz;

use Modules\HeadFirstPatterns\Starbuzz\Enums\Size;

abstract class CondimentDecorator extends Beverage
{
    protected Beverage $beverage;

    public function getSize(): Size
    {
        return $this->beverage->getSize();
    }
}
