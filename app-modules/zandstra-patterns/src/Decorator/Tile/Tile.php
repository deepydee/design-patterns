<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Decorator\Tile;

abstract class Tile
{
    abstract public function getWealthFactor(): int;
}
