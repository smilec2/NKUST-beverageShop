<?php
use App\Http\Middleware\AuthUserAdminMiddleware;
use Illuminate\Support\Facades\Route;
//首頁
Route::get('/',  "App\Http\Controllers\ProductController@indexForMainPage");

//Menu
Route::get('/menu', function () {
    return view('menu');
});

//會員管理
Route::group(['prefix' => 'user'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::get('test', 'App\Http\Controllers\UserAuthController@Signtest')->middleware(AuthUserAdminMiddleware::class);
        Route::post('signup', 'App\Http\Controllers\UserAuthController@SignUpProcess');
        Route::post('signin', 'App\Http\Controllers\UserAuthController@SigninProcess');
        Route::get('signout', 'App\Http\Controllers\UserAuthController@SignOut')->name('signout');
        Route::get('editProfileGet', 'App\Http\Controllers\UserAuthController@editProfileGet');
        Route::post('editProfilePost', 'App\Http\Controllers\UserAuthController@editProfilePost')->name('editProfilePost');
        Route::get('test123Get', 'App\Http\Controllers\UserAuthController@test123Get')->name('test123Get');
        
        
    });
});
//google登入
Route::get('/google/auth' ,'App\Http\Controllers\SocialiteController@redirectToProvider')->name('redirectToProvider');
Route::get('/google/auth/callback' ,'App\Http\Controllers\SocialiteController@handleProviderCallback')->name('handleProviderCallback');

//使用者
Route::group(['prefix' => 'product'], function () {
    Route::get("/", "App\Http\Controllers\ProductController@index");
    // gitRoute::post("create", "App\Http\Controllers\ProductController@store");
    Route::get("description/{id}","App\Http\Controllers\ProductController@description");
    Route::post('description/{id}', 'App\Http\Controllers\CartController@add');
    Route::get('onlineShop', 'App\Http\Controllers\ProductController@onlineShop')->name('product.onlineShop');
});

//購物車
Route::group(['prefix' => 'cart'], function () {
    Route::get('/{id}', 'App\Http\Controllers\CartController@index');
    Route::post('add', 'App\Http\Controllers\CartController@add');
    Route::put('update', 'App\Http\Controllers\CartController@update');
    Route::delete('delete', 'App\Http\Controllers\CartController@destroy');
});

//管理者
Route::group(['prefix' => 'manage'], function () {
    Route::group(["prefix" => "product"], function () {
        Route::get("create", "App\Http\Controllers\ProductController@create");
        Route::post("create", "App\Http\Controllers\ProductController@store");
        Route::put("edit/{id}", "App\Http\Controllers\ProductController@update");
        Route::delete("{id}", "App\Http\Controllers\ProductController@destroy");
        Route::get("success-order","App\Http\Controllers\ProductController@successOrder");
    });
});