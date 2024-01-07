<?php

use Modules\Facade\Http\Controllers\FacadeConceptualController;
use Modules\Facade\Http\Controllers\FacadeRealWorldController;

Route::get('/facade/conceptual', FacadeConceptualController::class);
Route::get('/facade/real-world', FacadeRealWorldController::class);
