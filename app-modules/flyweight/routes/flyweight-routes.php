<?php

use Modules\Flyweight\Http\Controllers\FlyweightConceptualController;
use Modules\Flyweight\Http\Controllers\FlyweightRealWorldController;

Route::get('/flyweight/conceptual', FlyweightConceptualController::class);
Route::get('/flyweight/real-world', FlyweightRealWorldController::class);
