<?php

use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Test\TestController;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\PostController;

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/teste', function () {
        return "Teste";
    });
    Route::get('posts', [PostController::class, 'posts'])->name('posts');
    Route::post('post', [PostController::class, 'postCreate'])->name('post.create');

    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::post('/create-publication', [HomeController::class, 'createPublication'])->name('create.publication');
    Route::get('/{user}', [HomeController::class, 'user'])->name('user');
});
