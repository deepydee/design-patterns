<?php

use Modules\HeadFirstPatterns\Http\Controllers\HeadFirstController;

Route::get('/head-first-patterns/simuduck', [HeadFirstController::class, 'simUDuck']);
Route::get('/head-first-patterns/weather', [HeadFirstController::class, 'weatherStation']);
Route::get('/head-first-patterns/starbuzz', [HeadFirstController::class, 'starBuzz']);
Route::get('/head-first-patterns/order-pizza/simple', [HeadFirstController::class, 'orderPizzaSimple']);
Route::get('/head-first-patterns/order-pizza/factory-method', [HeadFirstController::class, 'orderPizzaFactoryMethod']);
Route::get('/head-first-patterns/order-pizza/abstract-factory', [HeadFirstController::class, 'orderPizzaAbstractFactory']);
Route::get('/head-first-patterns/remote/simple-remote', [HeadFirstController::class, 'SimpleRemoteControl']);
Route::get('/head-first-patterns/remote/complex-remote', [HeadFirstController::class, 'ComplexRemoteControl']);
Route::get('/head-first-patterns/remote/complex-remote-lambdas', [HeadFirstController::class, 'ComplexRemoteControlLambdaas']);
Route::get('/head-first-patterns/remote/macro', [HeadFirstController::class, 'macro']);
