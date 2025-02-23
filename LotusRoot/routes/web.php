<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\SocialiteController;
use App\Http\Middleware\AuthUserAdminMiddleware;
use Illuminate\Support\Facades\Route;

//首頁
Route::get('/', [ProductController::class, 'indexForMainPage'])->name('home');

//菜單頁面
Route::view('/menu', 'menu')->name('menu');

//會員管理
Route::group(['prefix' => 'user'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::get('test', 'App\Http\Controllers\UserAuthController@Signtest')->middleware(AuthUserAdminMiddleware::class);
        // 註冊邏輯
        Route::post('signup', 'App\Http\Controllers\UserAuthController@SignUpProcess');
        // 登入邏輯
        Route::post('signin', 'App\Http\Controllers\UserAuthController@SigninProcess');
        // 清除 session 中的 user_id
        Route::get('signout', 'App\Http\Controllers\UserAuthController@SignOut')->name('signout');
        // 變更會員資料頁面
        Route::get('editProfileGet', 'App\Http\Controllers\UserAuthController@editProfileGet')->name('editProfileGet');
        // 變更會員資料邏輯
        Route::post('editProfilePost', 'App\Http\Controllers\UserAuthController@editProfilePost')->name('editProfilePost');  
    });
});

//google登入
Route::prefix('google/auth')->group(function () {
    Route::get('/', [SocialiteController::class, 'redirectToProvider'])->name('google.redirect');
    Route::get('/callback', [SocialiteController::class, 'handleProviderCallback'])->name('google.callback');
});

//關於產品
Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    Route::get('/{id}/description', [ProductController::class, 'description'])->name('product.description');
    Route::post('/{id}/add-to-cart', [CartController::class, 'add'])->name('cart.add');
    Route::get('/online-shop', [ProductController::class, 'onlineShop'])->name('product.onlineShop');
});

//購物車
Route::prefix('cart')->group(function () {
    Route::get('/{id}', [CartController::class, 'index'])->name('cart.index');
    Route::post('/add', [CartController::class, 'add'])->name('cart.add');
    Route::put('/update', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
});

//管理者-商品
Route::prefix('manage')->group(function () {
    Route::prefix('product')->group(function () {
        Route::get('/create', [ProductController::class, 'create'])->name('admin.product.create');
        Route::post('/create', [ProductController::class, 'store'])->name('admin.product.store');
        Route::put('/edit/{id}', [ProductController::class, 'update'])->name('admin.product.update');
        Route::delete('/{id}', [ProductController::class, 'destroy'])->name('admin.product.destroy');
        Route::get('/success-orders', [ProductController::class, 'successOrder'])->name('admin.product.successOrder');
    });
});
