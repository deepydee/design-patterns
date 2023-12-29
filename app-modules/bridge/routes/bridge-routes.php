<?php

use Modules\Bridge\Http\Controllers\BridgeConceptualController;
use Modules\Bridge\Http\Controllers\BridgeRealWorldController;

Route::get('/bridge/conceptual', BridgeConceptualController::class);
Route::get('/bridge/real-world', BridgeRealWorldController::class);

