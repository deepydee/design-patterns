<?php

use Modules\Bridge\Http\Controllers\BridgeConceptualController;
use Modules\Bridge\Http\Controllers\BridgeRealWorldController;
use Modules\Bridge\Http\Controllers\WithBridgeController;
use Modules\Bridge\Http\Controllers\WithoutBridgeController;

Route::get('/bridge/conceptual', BridgeConceptualController::class);
Route::get('/bridge/real-world', BridgeRealWorldController::class);
Route::get('/bridge/without', WithoutBridgeController::class);
Route::get('/bridge/with', WithBridgeController::class);
