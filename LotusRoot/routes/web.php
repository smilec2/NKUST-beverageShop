<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::group(['prefix' => 'user'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::get(
            'signup',
            'App\Http\Controllers\UserAuthController@SignUpPage'
        );
        Route::post(
            'signup',
            'App\Http\Controllers\UserAuthController@SignUpProcess'
        );
    });
});

Route::get("products", 'App\Http\Controllers\ProductController@index');

Route::group(['prefix' => 'manage'], function () {
    Route::group(["prefix" => "product"], function () {
        Route::get("create", function () {
            return view("upload_product");
        });
    });
});