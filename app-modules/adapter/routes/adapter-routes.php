<?php

use Modules\Adapter\Http\Controllers\AdapterConceptualController;
use Modules\Adapter\Http\Controllers\AdapterRealWorldController;

Route::get('/adapter/conceptual', AdapterConceptualController::class);
Route::get('/adapter/real-world', AdapterRealWorldController::class);

