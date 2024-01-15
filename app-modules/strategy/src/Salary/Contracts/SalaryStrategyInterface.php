<?php

declare(strict_types=1);

namespace Modules\Strategy\Salary\Contracts;

use App\Models\User;

interface SalaryStrategyInterface
{
    public function calculate(array $period, User $user): int;

    public function getName(): string;
}
