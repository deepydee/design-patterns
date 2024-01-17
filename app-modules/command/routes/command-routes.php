<?php

use Modules\Command\Http\Controllers\CommandConceptualController;
use Modules\Command\Http\Controllers\CommandRealWorldController;

Route::get('/command/conceptual', CommandConceptualController::class);
Route::get('/command/real-world', CommandRealWorldController::class);
