<?php

declare(strict_types=1);

namespace Modules\Composite\OrderTotal\Contracts;

use Modules\Composite\OrderTotal\Contracts\CompositeItem;

interface Composite extends CompositeItem
{
    public function setChildItem(CompositeItem $item): void;
}
