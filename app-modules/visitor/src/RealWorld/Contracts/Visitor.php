<?php

declare(strict_types=1);

namespace Modules\Visitor\RealWorld\Contracts;

use Modules\Visitor\RealWorld\Entities\Company;
use Modules\Visitor\RealWorld\Entities\Department;
use Modules\Visitor\RealWorld\Entities\Employee;

/**
 * Интерфейс Посетителя объявляет набор методов посещения для каждого класса
 * Конкретного Компонента.
 */
interface Visitor
{
    public function visitCompany(Company $company): string;

    public function visitDepartment(Department $department): string;

    public function visitEmployee(Employee $employee): string;
}
