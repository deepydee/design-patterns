<?php

use Modules\ZandstraPatterns\Http\Controllers\CompositeController;
use Modules\ZandstraPatterns\Http\Controllers\DecoratorController;
use Modules\ZandstraPatterns\Http\Controllers\FacadeController;
use Modules\ZandstraPatterns\Http\Controllers\InterpreterController;
use Modules\ZandstraPatterns\Http\Controllers\StrategyController;

Route::get('/zandstra-patterns/inheritance', [DecoratorController::class, 'inheritance']);
Route::get('/zandstra-patterns/tile-decorator', [DecoratorController::class, 'tileDecorator']);
Route::get('/zandstra-patterns/request-decorator', [DecoratorController::class, 'request']);
Route::get('/zandstra-patterns/facade/procedural', [FacadeController::class, 'procedural']);
Route::get('/zandstra-patterns/facade/facade', [FacadeController::class, 'facade']);
Route::get('/zandstra-patterns/composite', [CompositeController::class, 'composite']);
Route::get('/zandstra-patterns/interpreter', [InterpreterController::class, 'interpreter']);
Route::get('/zandstra-patterns/strategy', [StrategyController::class, 'index']);
