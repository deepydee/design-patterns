<?php

declare(strict_types=1);

namespace Modules\Visitor\RealWorld\Visitors;

use Modules\Visitor\RealWorld\Contracts\Visitor;
use Modules\Visitor\RealWorld\Entities\Company;
use Modules\Visitor\RealWorld\Entities\Department;
use Modules\Visitor\RealWorld\Entities\Employee;

class SalaryReport implements Visitor
{
    public function visitCompany(Company $company): string
    {
        $output = '';
        $total = 0;

        foreach ($company->getDepartments() as $department) {
            $total += $department->getCost();
            $output .= '<br>--'.$this->visitDepartment($department);
        }

        $output = $company->getName().
            ' ('.$total.')<br>'.$output;

        return $output;
    }

    public function visitDepartment(Department $department): string
    {
        $output = '';

        foreach ($department->getEmployees() as $employee) {
            $output .= '   '.$this->visitEmployee($employee);
        }

        $output = $department->getName().
            ' ('.$department->getCost().')<br><br>'.
            $output;

        return $output;
    }

    public function visitEmployee(Employee $employee): string
    {
        return $employee->getSalary().
            ' '.$employee->getName().
            ' ('.$employee->getPosition().')<br>';
    }
}
