<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Composite;

use Modules\ZandstraPatterns\Composite\CompositeUnit;

class UnitScript
{
    public static function joinExisting(
        Unit $newUnit,
        Unit $occupyingUnit,
    ): CompositeUnit {
        $comp = $occupyingUnit->getComposite();

        if (! is_null($comp)) {
            $comp->addUnit($newUnit);

            return $comp;
        }

        $comp = new Army();

        $comp->addUnit($occupyingUnit);
        $comp->addUnit($newUnit);

        return $comp;
    }
}
