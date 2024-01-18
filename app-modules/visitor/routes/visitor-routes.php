<?php

use Modules\Visitor\Http\Controllers\VisitorConceptualController;
use Modules\Visitor\Http\Controllers\VisitorRealWorldController;

Route::get('/visitor/conceptual', VisitorConceptualController::class);
Route::get('/visitor/real-world', VisitorRealWorldController::class);

