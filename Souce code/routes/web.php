<?php

use App\Http\Controllers\AboutUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\user\AuthController;
use App\Http\Controllers\admin\CriticsController;
use App\Http\Controllers\web\ProfileWebController;
use App\Http\Controllers\admin\AuthAdminController;
use App\Http\Controllers\admin\OrderAdminController;
use App\Http\Controllers\web\ProductUserController;
use App\Http\Controllers\admin\WebProfileController;
use App\Http\Controllers\admin\ProductAdminController;
use App\Http\Controllers\admin\ProductCategoryController;
use App\Http\Controllers\admin\ProfileAdminController;
use App\Http\Controllers\admin\ReviewController;
use App\Http\Controllers\web\CartController;
use App\Http\Controllers\web\OrderController;
use App\Http\Controllers\web\CriticsUserController;
use App\Http\Controllers\web\RequestUserController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('product', ProductUserController::class);
Route::get('/profile', [ProfileWebController::class, 'index'])->name('profile');
Route::get('/critics', [CriticsUserController::class, 'index'])->name('critics');
Route::get('/request', [RequestUserController::class, 'index'])->name('request');
Route::post('/product/{product}/star', [ProductUserController::class, 'star'])->name('review.star');
Route::post('/product/{product}/review', [ProductUserController::class, 'store'])->name('review.store');
Route::get('/aboutus', [AboutUsController::class, 'index'])->name('user.aboutus');


Route::prefix('user/')->name('user.')->group(function(){
    Route::get('/', [AuthController::class, 'index']);
    Route::prefix('auth/')->name('auth.')->group(function(){
        Route::get('',[AuthController::class, 'index'])->name('index');
        Route::get('/register',[AuthController::class, 'register'])->name('register');
        Route::post('login',[AuthController::class, 'do_login'])->name('login');
        Route::post('register',[AuthController::class, 'do_register'])->name('register');
        Route::get('logout',[AuthController::class, 'do_logout'])->name('logout');
    });
    Route::resource('critics', CriticsUserController::class);
    Route::resource('request', RequestUserController::class);
    Route::resource('cart', CartController::class);
    Route::resource('orders', OrderController::class);
});

Route::prefix('admin/')->name('admin.')->group(function(){
    Route::get('/', [DashboardController::class, 'index']);
    Route::prefix('auth/')->name('auth.')->group(function(){
        Route::get('',[AuthAdminController::class, 'index'])->name('index');
        Route::post('login',[AuthAdminController::class, 'do_login'])->name('login');
        Route::post('register',[AuthAdminController::class, 'do_register'])->name('register');
        Route::get('logout',[AuthAdminController::class, 'do_logout'])->name('logout');
    });
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('productcategory', ProductCategoryController::class);
    Route::resource('product', ProductAdminController::class);
    Route::resource('cart', CartController::class);
    Route::resource('critics', CriticsController::class);
    Route::resource('webprofile', WebProfileController::class);
    Route::resource('order', OrderAdminController::class);
    Route::resource('review', ReviewController::class);
    Route::resource('webprofile', ProfileAdminController::class);
    Route::post('product/{product}/published',[ProductAdminController::class, 'published'])->name('product.published');
    Route::post('product/{product}/inactive',[ProductAdminController::class, 'inactive'])->name('product.inactive');
    Route::post('order/{order}/selesai', [OrderAdminController::class, 'selesai'])->name('order.selesai');
    Route::post('order/{order}/batal', [OrderAdminController::class, 'batal'])->name('order.batal');
    Route::get('order/{order}', [OrderAdminController::class, 'kirim'])->name('order.kirim');
});