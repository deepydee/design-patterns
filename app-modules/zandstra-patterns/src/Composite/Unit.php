<?php

declare(strict_types=1);

namespace Modules\ZandstraPatterns\Composite;

abstract class Unit
{
    public function getComposite(): ?CompositeUnit
    {
        return null;
    }

    abstract public function bombardStrength(): int;
}
