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
Route::prefix('user')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::get('test', [UserAuthController::class, 'Signtest'])->middleware(AuthUserAdminMiddleware::class);
        Route::post('signup', [UserAuthController::class, 'SignUpProcess'])->name('user.signup');
        Route::post('signin', [UserAuthController::class, 'SigninProcess'])->name('user.signin');
        Route::get('signout', [UserAuthController::class, 'SignOut'])->name('user.signout');
        Route::get('edit-profile', [UserAuthController::class, 'editProfileGet'])->name('user.editProfile.get');
        Route::post('edit-profile', [UserAuthController::class, 'editProfilePost'])->name('user.editProfile.post');
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
