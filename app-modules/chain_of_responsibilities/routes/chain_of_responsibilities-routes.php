<?php

use Modules\ChainOfResponsibilities\Http\Controllers\ChainOfResponsibilitiesConceptualController;
use Modules\ChainOfResponsibilities\Http\Controllers\ChainOfResponsibilitiesRealWorldController;

Route::get('/cor/conceptual', ChainOfResponsibilitiesConceptualController::class);
Route::get('/cor/real-world', ChainOfResponsibilitiesRealWorldController::class);
