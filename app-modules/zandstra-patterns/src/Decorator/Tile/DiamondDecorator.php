<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Decorator\Tile;

class DiamondDecorator extends TileDecorator
{
    public function getWealthFactor(): int
    {
        return $this->tile->getWealthFactor() + 2;
    }
}
