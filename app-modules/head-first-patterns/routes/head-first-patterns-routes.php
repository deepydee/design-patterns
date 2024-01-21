<?php

use Modules\HeadFirstPatterns\Http\Controllers\HeadFirstController;

Route::get('/head-first-patterns/simuduck', [HeadFirstController::class, 'simUDuck']);
