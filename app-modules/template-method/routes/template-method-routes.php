<?php

use Modules\TemplateMethod\Http\Controllers\TemplateMethodConceptualController;
use Modules\TemplateMethod\Http\Controllers\TemplateMethodRealWorldController;

Route::get('/template-method/conceptual', TemplateMethodConceptualController::class);
Route::get('/template-method/real-world', TemplateMethodRealWorldController::class);

