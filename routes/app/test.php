<?php

use App\Http\Controllers\Test\TestController;

Route::prefix('test')->group(function () {
    Route::get('data-table', [TestController::class, 'dataTable'])->name('data.table');
    Route::get('dark-mode', [TestController::class, 'darkMode'])->name('dark.mode');
    Route::get('daisyui', [TestController::class, 'daisyui'])->name('daisyui');
});
