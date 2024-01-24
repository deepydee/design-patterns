<?php

use Modules\HeadFirstPatterns\Http\Controllers\HeadFirstController;

Route::get('/head-first-patterns/simuduck', [HeadFirstController::class, 'simUDuck']);
Route::get('/head-first-patterns/weather', [HeadFirstController::class, 'weatherStation']);
Route::get('/head-first-patterns/starbuzz', [HeadFirstController::class, 'starBuzz']);
Route::get('/head-first-patterns/order-pizza/simple', [HeadFirstController::class, 'orderPizzaSimple']);
