<?php

use Modules\ZandstraPatterns\Http\Controllers\DecoratorController;
use Modules\ZandstraPatterns\Http\Controllers\FacadeController;

Route::get('/zandstra-patterns/inheritance', [DecoratorController::class, 'inheritance']);
Route::get('/zandstra-patterns/tile-decorator', [DecoratorController::class, 'tileDecorator']);
Route::get('/zandstra-patterns/request-decorator', [DecoratorController::class, 'request']);
Route::get('/zandstra-patterns/facade/procedural', [FacadeController::class, 'procedural']);
Route::get('/zandstra-patterns/facade/facade', [FacadeController::class, 'facade']);
