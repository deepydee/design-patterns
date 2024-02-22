<?php

use Modules\ZandstraPatterns\Http\Controllers\DecoratorController;

Route::get('/zandstra-patterns/inheritance', [DecoratorController::class, 'inheritance']);
Route::get('/zandstra-patterns/tile-decorator', [DecoratorController::class, 'tileDecorator']);
