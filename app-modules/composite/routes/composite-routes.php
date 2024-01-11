<?php

use Modules\Composite\Http\Controllers\CompositeConceptualController;
use Modules\Composite\Http\Controllers\CompositeOrdersController;
use Modules\Composite\Http\Controllers\CompositeRealWorldController;

Route::get('/composite/conceptual', CompositeConceptualController::class);
Route::get('/composite/real-world', CompositeRealWorldController::class);
Route::get('/composite/orders', CompositeOrdersController::class);
