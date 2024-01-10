<?php

use Modules\Singleton\Http\Controllers\SingletonConceptualController;
use Modules\Singleton\Http\Controllers\SingletonRealWorldController;

Route::get('/singleton/conceptual', SingletonConceptualController::class);
Route::get('/singleton/real-world', SingletonRealWorldController::class);
