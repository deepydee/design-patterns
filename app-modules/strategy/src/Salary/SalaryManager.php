<?php

declare(strict_types=1);

namespace Modules\Strategy\Salary;

use App\Models\User;
use Illuminate\Support\Collection;
use Modules\Strategy\Salary\Contracts\SalaryStrategyInterface;
use Modules\Strategy\Salary\Enums\Department;
use Modules\Strategy\Salary\Strategies\CourierBikeStrategy;
use Modules\Strategy\Salary\Strategies\CourierCarStrategy;
use Modules\Strategy\Salary\Strategies\CourierHikingStrategy;
use Modules\Strategy\Salary\Strategies\FloristStrategy;
use Modules\Strategy\Salary\Strategies\LogistStrategy;

class SalaryManager
{
    private SalaryStrategyInterface $salaryStrategy;

    public function __construct(
        private array $period,
        private Collection $users,
    ) {
    }

    public function handle()
    {
        $userSalary = $this->calculateSalary();

        dd($userSalary);
    }

    private function calculateSalary(): Collection
    {
        return $this->users->map(function (User $user) {
            $strategy = $this->getStrategyByUser($user);

            $salary = $this->setSalaryStrategy($strategy)
                ->calculateUserSalary($this->period, $user);

            $strategyName = $strategy->getName();
            $userId = $user->id;

            return compact('userId', 'strategyName', 'salary');
        });
    }

    private function getStrategyByUser(User $user): SalaryStrategyInterface
    {
        return match ($user->departmentName()) {
            Department::Florist => new FloristStrategy(),
            Department::Logist => new LogistStrategy(),
            Department::CourierHiking => new CourierHikingStrategy(),
            Department::CourierBike => new CourierBikeStrategy(),
            Department::CourierCar => new CourierCarStrategy(),
            default => throw new \Exception('Unknown Strategy'),
        };
    }

    private function setSalaryStrategy(SalaryStrategyInterface $salaryStrategy): self
    {
        $this->salaryStrategy = $salaryStrategy;

        return $this;
    }

    private function calculateUserSalary(array $period, User $user): float
    {
        return $this->salaryStrategy->calculate($period, $user);
    }
}
