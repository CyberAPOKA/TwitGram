<?php

use App\Http\Controllers\Test\TestController;
use Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests;

Route::prefix('test')->group(function () {
    Route::get('data-table', [TestController::class, 'dataTable'])->name('data.table');
    Route::get('dark-mode', [TestController::class, 'darkMode'])->name('dark.mode');
    Route::get('daisyui', [TestController::class, 'daisyui'])->name('daisyui');
    Route::get('precognition', [TestController::class, 'precognition'])->name('precognition');
    Route::post('precognition/post', [TestController::class, 'precognitionPost'])
        ->name('precognition.post')->middleware(HandlePrecognitiveRequests::class);

    Route::get('nasa-api', [TestController::class, 'nasaApi'])->name('nasa.api');
    Route::get('carousel', [TestController::class, 'carousel'])->name('carousel');
});
