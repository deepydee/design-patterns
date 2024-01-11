<?php

declare(strict_types=1);

namespace Modules\Composite\OrderTotal\Contracts;

interface CompositeItem
{
    public function calcPrice(): float;
}
