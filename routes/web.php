<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::middleware(['auth:sanctum'])->name('api.')->group(function () {
    Route::controller(ChatController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/messages', 'messages');
        Route::post('/send', 'send');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
