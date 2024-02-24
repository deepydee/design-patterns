<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Composite;

class Army extends CompositeUnit
{

    public function bombardStrength(): int
    {
        return collect($this->units)
            ->map(fn (Unit $unit): int => $unit->bombardStrength())
            ->sum();
    }
}
