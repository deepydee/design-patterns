<?php

use Modules\Strategy\Http\Controllers\StrategyConceptualController;
use Modules\Strategy\Http\Controllers\StrategyRealWorldController;

Route::get('/strategy/conceptual', StrategyConceptualController::class);
Route::get('/strategy/real-world', StrategyRealWorldController::class);

