<?php

use Modules\Mediator\Http\Controllers\MediatorConceptualController;
use Modules\Mediator\Http\Controllers\MediatorRealWorldController;

Route::get('/mediator/conceptual', MediatorConceptualController::class);
Route::get('/mediator/real-world', MediatorRealWorldController::class);
