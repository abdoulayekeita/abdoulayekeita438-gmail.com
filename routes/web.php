<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::namespace('Auth')->group(function(){

    Route::get('register', 'AuthController@showRegistrationForm')->name('register');
    Route::post('register', 'AuthController@register');
});


Route::namespace('Dashboard')->prefix('dashboard')->group(function(){

    Route::middleware('auth')->group(function(){
        Route::get('/', 'DashboardController')->name('dashboard');
        Route::post('/product/image/upload','ImageUploadController@store');
        Route::get('/product/image/delete', 'ImageUploadController@destroy');
        Route::post('/search_annonce','SearchController@searchPost')->name('search.post');
        Route::post('/search_product/{shop}','SearchController@searchProduct')->name('search.product');

        Route::resource('shop', 'ShopController');

        Route::resource('shop.product', 'ProductController');

        Route::resource('post', 'PostController');
    });

    Route::get('/how_it_work','PageController@howItWork')->name('how_it_work');
    Route::get('/contact','PageController@contact')->name('contact');

});

Route::namespace('Home')->group(function(){

    Route::get('/','HomeController@home')->name('home');
    Route::get('/Terms_of_use','HomeController@TermsOfUse')->name('Terms_of_use');
    Route::get('/Who_are_we','HomeController@WhoAreWe')->name('Who_are_we');
    Route::get('/category/{subCategory}','HomeController@category')->name('category');

});





