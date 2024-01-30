<?php

use Modules\HeadFirstPatterns\Http\Controllers\HeadFirstController;

Route::get('/head-first-patterns/simuduck', [HeadFirstController::class, 'simUDuck']);
Route::get('/head-first-patterns/weather', [HeadFirstController::class, 'weatherStation']);
Route::get('/head-first-patterns/starbuzz', [HeadFirstController::class, 'starBuzz']);
Route::get('/head-first-patterns/order-pizza/simple', [HeadFirstController::class, 'orderPizzaSimple']);
Route::get('/head-first-patterns/order-pizza/factory-method', [HeadFirstController::class, 'orderPizzaFactoryMethod']);
Route::get('/head-first-patterns/order-pizza/abstract-factory', [HeadFirstController::class, 'orderPizzaAbstractFactory']);
