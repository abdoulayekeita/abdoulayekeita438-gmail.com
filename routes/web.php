<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth')->namespace('Dashboard')->prefix('dashboard')->name('dashboard')->group(function(){

    Route::get('/', 'DashboardController');
});

Route::resource('shop', 'ShopController')->only('index', 'create', 'store','show');

Route::resource('product', 'ProductController')->only('index', 'create', 'store');

Route::resource('post', 'PostController')->only('index', 'create', 'store');

Route::get('/',function (){
    return view('home.index');
});


//Route::get('/home', 'HomeController@index')->name('home');



