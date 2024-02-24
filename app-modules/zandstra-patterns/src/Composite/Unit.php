<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Composite;

use Modules\ZandstraPatterns\Composite\Exceptions\UnitException;

abstract class Unit
{
    public function addUnit(Unit $unit): void
    {
        throw new UnitException(get_class($this) . ' does not support adding units');
    }

    public function removeUnit(Unit $unit): void
    {
        throw new UnitException(get_class($this) . ' does not support removing units');
    }

    abstract public function bombardStrength(): int;
}
