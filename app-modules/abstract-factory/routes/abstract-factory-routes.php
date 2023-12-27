<?php

declare(strict_types=1);

use Modules\AbstractFactory\Http\Controllers\AbstractFactoryConceptualController;
use Modules\AbstractFactory\Http\Controllers\AbstractFactoryRealWorldController;

Route::get('/abstract-factory/conceptual', AbstractFactoryConceptualController::class);
Route::get('/abstract-factory/real-world', AbstractFactoryRealWorldController::class);
