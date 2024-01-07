<?php

use Modules\Decorator\Http\Controllers\DecoratorConceptualController;
use Modules\Decorator\Http\Controllers\DecoratorRealWorldController;

Route::get('/decorator/conceptual', DecoratorConceptualController::class);
Route::get('/decorator/real-world', DecoratorRealWorldController::class);
