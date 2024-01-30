<?php

declare(strict_types=1);

namespace Modules\Strategy\Salary\Strategies;

use App\Models\User;
use Modules\Strategy\Salary\Contracts\SalaryStrategyInterface;

abstract class AbstractStrategy implements SalaryStrategyInterface
{
    public function calculate(array $period, User $user): int
    {
        return rand(500, 2000);
    }

    public function getName(): string
    {
        return class_basename(static::class);
    }
}
