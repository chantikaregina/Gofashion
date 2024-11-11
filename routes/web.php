<?php

use App\Http\Controllers\Auth\UserLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['guest:admin', 'guest:user'])->group(function () {
    Route::get('/login', [UserLoginController::class, 'login'])->name('login');
    Route::post('/login', [UserLoginController ::class, 'auth'])->name('auth');
});
