<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Decorator\Tile;

class PollutedDecorator extends TileDecorator
{
    public function getWealthFactor(): int
    {
        return $this->tile->getWealthFactor() - 4;
    }
}
