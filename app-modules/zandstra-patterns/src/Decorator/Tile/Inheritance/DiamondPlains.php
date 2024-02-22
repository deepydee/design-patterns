<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Decorator\Tile\Inheritance;

use Modules\ZandstraPatterns\Decorator\Plains;

class DiamondPlains extends Plains
{
    public function getWealthFactor(): int
    {
        return parent::getWealthFactor() + 2;
    }
}
