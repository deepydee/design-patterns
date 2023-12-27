<?php

use Modules\Dialog\Http\Controllers\DialogController;

Route::get('/dialogs', [DialogController::class, 'index'])->name('dialogs.index');
// Route::get('/dialogs/create', [DialogController::class, 'create'])->name('dialogs.create');
// Route::post('/dialogs', [DialogController::class, 'store'])->name('dialogs.store');
// Route::get('/dialogs/{dialog}', [DialogController::class, 'show'])->name('dialogs.show');
// Route::get('/dialogs/{dialog}/edit', [DialogController::class, 'edit'])->name('dialogs.edit');
// Route::put('/dialogs/{dialog}', [DialogController::class, 'update'])->name('dialogs.update');
// Route::delete('/dialogs/{dialog}', [DialogController::class, 'destroy'])->name('dialogs.destroy');
