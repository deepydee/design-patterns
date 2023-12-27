<?php

use Modules\FactoryMethod\Http\Controllers\FactoryConceptualController;
use Modules\FactoryMethod\Http\Controllers\SocialPosterController;

Route::get('factory-method/conceptual', [FactoryConceptualController::class, 'index']);
Route::get('factory-method/poster', [SocialPosterController::class, 'index']);
