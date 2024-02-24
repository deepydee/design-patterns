<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Composite;

class Army extends Unit
{
    private array $units = [];

    public function addUnit(Unit $unit): void
    {
        if (in_array($unit, $this->units, true)) {
            return;
        }

        $this->units[] = $unit;

    }

    public function removeUnit(Unit $unit): void
    {
        $idx = array_search($unit, $this->units, true);

        if (is_int($idx)) {
            array_splice($this->units, $idx, 1);
        }

        return;
    }

    public function bombardStrength(): int
    {
        return collect($this->units)
            ->map(fn (Unit $unit): int => $unit->bombardStrength())
            ->sum();
    }
}
