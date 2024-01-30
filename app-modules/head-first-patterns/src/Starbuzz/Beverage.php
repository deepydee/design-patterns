<?php

declare(strict_types=1);

namespace Modules\HeadFirstPatterns\Starbuzz;

use Modules\HeadFirstPatterns\Starbuzz\Enums\Size;

abstract class Beverage
{
    protected string $description = 'Unknown Beverage';

    protected Size $size = Size::TALL;

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getSize(): Size
    {
        return $this->size;
    }

    public function setSize(Size $size): void
    {
        $this->size = $size;
    }

    abstract public function cost(): float;
}
