<?php

use Modules\Strategy\Http\Controllers\StrategyConceptualController;
use Modules\Strategy\Http\Controllers\StrategyRealWorldController;
use Modules\Strategy\Http\Controllers\StrategySalaryController;

Route::get('/strategy/conceptual', StrategyConceptualController::class);
Route::get('/strategy/real-world', StrategyRealWorldController::class);
Route::get('/strategy/salary', StrategySalaryController::class);

