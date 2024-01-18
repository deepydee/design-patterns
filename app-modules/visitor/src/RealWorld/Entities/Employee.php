<?php

declare(strict_types=1);

namespace Modules\Visitor\RealWorld\Entities;

use Modules\Visitor\RealWorld\Contracts\Entity;
use Modules\Visitor\RealWorld\Contracts\Visitor;

class Employee implements Entity
{
    public function __construct(
        private string $name,
        private string $position,
        private int $salary,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }

    public function accept(Visitor $visitor): string
    {
        return $visitor->visitEmployee($this);
    }
}
