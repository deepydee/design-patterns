<?php

namespace Modules\Strategy\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Carbon;
use Modules\Strategy\Salary\SalaryManager;


/**
 * Паттерн Стратегия
 *
 * Назначение: Определяет семейство схожих алгоритмов и помещает каждый из них в
 * собственный класс, после чего алгоритмы можно взаимозаменять прямо во время
 * исполнения программы.
 */
class StrategySalaryController extends Controller
{
    public function __invoke()
    {
        $period = [
            Carbon::now()->subMonths()->startOfMonth(),
            Carbon::now()->subMonths()->endOfMonth(),
        ];

        $users = User::all();

        (new SalaryManager($period, $users))->handle();
    }
}
