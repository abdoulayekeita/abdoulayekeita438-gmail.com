<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::namespace('Auth')->group(function(){

    Route::get('register', 'AuthController@showRegistrationForm')->name('register');
    Route::post('register', 'AuthController@register');
});


Route::middleware('auth')->namespace('Dashboard')->prefix('dashboard')->group(function(){

    Route::get('/', 'DashboardController')->name('dashboard');
    Route::post('/product/image/upload','ImageUploadController@store');
    Route::get('/product/image/delete', 'ImageUploadController@destroy');
    Route::post('/search_annonce','SearchController@searchPost')->name('search.post');
    Route::post('/search_product/{shop}','SearchController@searchProduct')->name('search.product');

    Route::resource('shop', 'ShopController');

    Route::resource('shop.product', 'ProductController');

    Route::resource('post', 'PostController');
});

Route::namespace('Home')->group(function(){

    Route::get('/','HomeController@home');
});





