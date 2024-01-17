<?php

use Modules\Iterator\Http\Controllers\IteratorConceptualController;
use Modules\Iterator\Http\Controllers\IteratorRealWorldController;

Route::get('/iterator/conceptual', IteratorConceptualController::class);
Route::get('/iterator/real-world', IteratorRealWorldController::class);
