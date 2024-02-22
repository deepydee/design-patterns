<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Composite;

class Army
{
    private array $units = [];

    public function addUnit(Unit $unit): self
    {
        $this->units[] = $unit;

        return $this;
    }

    public function bombardStrength(): int
    {
        return collect($this->units)
            ->map(fn (Unit $unit): int => $unit->bombardStrength())
            ->sum();
    }
}
