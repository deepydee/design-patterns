<?php

use Modules\Observer\Http\Controllers\ObserverConceptualController;
use Modules\Observer\Http\Controllers\ObserverRealWorldController;

Route::get('/observer/conceptual', ObserverConceptualController::class);
Route::get('/observer/real-world', ObserverRealWorldController::class);
