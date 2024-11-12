<?php

use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [UserLoginController::class, 'login'])->name('login');
    Route::post('/login', [UserLoginController ::class, 'auth'])->name('auth');
});

Route::get('/admin/dashboard', [UserController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/', [HomeController::class, 'home'])->name('home');
