<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Starbuzz\Condiments;

use Modules\HeadFirstPatterns\Starbuzz\Beverage;
use Modules\HeadFirstPatterns\Starbuzz\CondimentDecorator;
use Modules\HeadFirstPatterns\Starbuzz\Enums\Size;

class Whip extends CondimentDecorator
{
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription().', Milk';
    }

    public function cost(): float
    {
        return $this->beverage->cost() + match ($this->beverage->getSize()) {
            Size::TALL => 0.10,
            Size::GRANDE => 0.15,
            Size::VENTI => 0.20,
            default => throw new \UnexpectedValueException('Unexpected value '.$this->beverage->getSize()),
        };
    }
}
