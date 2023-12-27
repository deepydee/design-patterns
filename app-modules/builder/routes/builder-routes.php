<?php

use Illuminate\Support\Facades\Route;
use Modules\Builder\Http\Controllers\BuilderConceptualController;

Route::get('/builder/conceptual', BuilderConceptualController::class);

