<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Composite;

class Archer extends Unit
{
    public function bombardStrength(): int
    {
        return 4;
    }
}
