<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Decorator\Tile;

class Plains extends Tile
{
    private int $wealthFactor = 2;

    public function getWealthFactor(): int
    {
        return $this->wealthFactor;
    }
}
