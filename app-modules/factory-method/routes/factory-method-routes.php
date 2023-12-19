<?php

use Modules\FactoryMethod\Http\Controllers\FactoryConceptualController;

Route::get('factory-method/conceptual', [FactoryConceptualController::class, 'index']);
