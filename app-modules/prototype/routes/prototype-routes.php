<?php

use Modules\Prototype\Http\Controllers\PrototypeConceptualController;
use Modules\Prototype\Http\Controllers\PrototypeRealWorldController;

Route::get('/prototype/conceptual', PrototypeConceptualController::class);
Route::get('/prototype/real-world', PrototypeRealWorldController::class);
