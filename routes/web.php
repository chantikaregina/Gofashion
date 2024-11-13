<?php

use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [UserLoginController::class, 'login'])->name('login');
    Route::post('/login', [UserLoginController::class, 'auth'])->name('auth');
});

Route::middleware(['user'])->group(function () {
    Route::get('/admin/dashboard', [UserController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [UserController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/profile', [UserController::class, 'profile'])->name('admin.profile');
    Route::get('/admin/category', [CategoryController::class, 'category'])->name('admin.category');
    Route::get('/admin/category/tambah', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/admin/category/tambah', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/admin/category/edit/{id_category}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('/admin/category/edit/{id_category}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::get('/admin/pembimbing/delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');


});

Route::get('/', [HomeController::class, 'home'])->name('home');
