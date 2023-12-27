<?php

use Illuminate\Support\Facades\Route;
use Modules\Builder\Http\Controllers\BuilderConceptualController;
use Modules\Builder\Http\Controllers\BuilderRealWorldController;

Route::get('/builder/conceptual', BuilderConceptualController::class);
Route::get('/builder/real-world', BuilderRealWorldController::class);

