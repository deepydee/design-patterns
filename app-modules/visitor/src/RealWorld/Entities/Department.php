<?php

declare(strict_types=1);

namespace Modules\Visitor\RealWorld\Entities;

use Modules\Visitor\RealWorld\Contracts\Entity;
use Modules\Visitor\RealWorld\Contracts\Visitor;

class Department implements Entity
{
    public function __construct(private string $name, private array $employees)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmployees(): array
    {
        return $this->employees;
    }

    public function getCost(): int
    {
        $cost = 0;

        foreach ($this->employees as $employee) {
            $cost += $employee->getSalary();
        }

        return $cost;
    }

    public function accept(Visitor $visitor): string
    {
        return $visitor->visitDepartment($this);
    }
}
