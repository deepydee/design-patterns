<?php

declare(strict_types=1);

namespace Modules\Visitor\RealWorld\Entities;

use Modules\Visitor\RealWorld\Contracts\Entity;
use Modules\Visitor\RealWorld\Contracts\Visitor;

/**
 * Конкретный Компонент Компании.
 */
class Company implements Entity
{
    public function __construct(private string $name, private array $departments)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDepartments(): array
    {
        return $this->departments;
    }

    public function accept(Visitor $visitor): string
    {
        // Смотрите, Компонент Компании должен вызвать метод visitCompany. Тот
        // же принцип применяется ко всем компонентам.
        return $visitor->visitCompany($this);
    }
}
