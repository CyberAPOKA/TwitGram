<?php

use App\Http\Controllers\Web\HomeController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');

    Route::get('/{user}', [HomeController::class, 'user'])->name('user');
});
