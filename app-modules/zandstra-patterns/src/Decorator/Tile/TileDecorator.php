<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Decorator\Tile;

abstract class TileDecorator extends Tile
{
    public function __construct(protected Tile $tile)
    {
    }
}
