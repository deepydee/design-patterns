<?php

declare(strict_types=1);

namespace Modules\Composite\OrderTotal\Contracts;

interface Composite extends CompositeItem
{
    public function setChildItem(CompositeItem $item): void;
}
