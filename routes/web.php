<?php

use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\CartItemController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController as FrontendProductController;
use App\Http\Controllers\Frontend\ReviewController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [UserLoginController::class, 'login'])->name('login');
    Route::post('/login', [UserLoginController::class, 'auth'])->name('auth');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::put('/profile/update', [UserController::class, 'update'])->name('profile.update');

    Route::get('/category', [CategoryController::class, 'category'])->name('category');
    Route::get('/category/tambah', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/tambah', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id_category}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/edit/{id_category}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    Route::get('/setting', [SettingController::class, 'setting'])->name('setting');
    Route::get('/setting/edit/{id_setting}', [SettingController::class, 'edit'])->name('setting.edit');
    Route::put('/setting/edit/{id_setting}', [SettingController::class, 'update'])->name('setting.update');

    Route::get('/product', [ProductController::class, 'product'])->name('product');
    Route::get('/product/tambah', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/tambah', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{id_product}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/edit/{id_product}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/delete/{id_product}', [ProductController::class, 'delete'])->name('product.delete');

    Route::get('/product/review/{id}', [ProductController::class, 'review'])->name('product.review');
    Route::get('/product/review/{id_product}/delete/{id}', [ProductController::class, 'deleteReview'])->name('review.delete');
});


Route::get('/', [HomeController::class, 'home'])->name('home');


Route::get('/detail/{id_product}', [HomeController::class, 'detail'])->name('detail');
Route::post('/detail/review', [HomeController::class, 'review'])->name('review');

Route::post('/add_to_cart', [CartItemController::class, 'addtocart'])->name('add.to.cart');
Route::get('/cart', [CartItemController::class, 'showCart'])->name('show.cart');

Route::patch('/cart/update/{index}', [CartItemController::class, 'update'])->name('cart.update');
Route::delete('/cart/delete/{index}', [CartItemController::class, 'delete'])->name('cart.delete');
Route::post('/cart/order/confirm', [CartItemController::class, 'confirmOrder'])->name('cart.order.confirm');
