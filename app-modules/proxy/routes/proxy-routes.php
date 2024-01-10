<?php

use Modules\Proxy\Http\Controllers\ProxyConceptualController;
use Modules\Proxy\Http\Controllers\ProxyRealWorldController;

Route::get('/proxy/conceptual', ProxyConceptualController::class);
Route::get('/proxy/real-world', ProxyRealWorldController::class);
