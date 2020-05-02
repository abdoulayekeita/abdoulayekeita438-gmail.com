<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth')->namespace('Dashboard')->prefix('dashboard')->name('dashboard')->group(function(){

    Route::get('/', 'DashboardController');
});
Route::post('/product/image/upload','ImageUploadController@store');
Route::get('/product/image/delete', 'ImageUploadController@destroy');

Route::resource('shop', 'ShopController');

Route::resource('shop.product', 'ProductController');

Route::resource('post', 'PostController');

Route::get('/',function (){
    return view('home.index');
});


//Route::get('/home', 'HomeController@index')->name('home');



