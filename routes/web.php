<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth')->namespace('Dashboard')->prefix('dashboard')->name('dashboard')->group(function(){

    Route::get('/', 'DashboardController');
});

Route::get('/create_shop', function () {
    return view('dashboard.shop.create');
})->name('create_shop');
Route::get('/my_shops', function () {
    return view('dashboard.shop.all_shop');
})->name('my_shops');
Route::get('/', function () {
    return view('home.index');
})->name('home');
Route::get('/shop', function () {
    return view('home.shop');
})->name('shop');
Route::get('/detail_annonce', function () {
    return view('home.detail_annonce');
})->name('detail_annonce');
Route::get('/content_shop', function () {
    return view('home.content_shop');
})->name('content_shop');
Route::get('/create', function () {
    return view('dashboard.product.create');
})->name('product.create');

Route::post('/store/image', 'TestController@store');
Route::get('/show', function () {
    return view('dashboard.product.show');
})->name('product.show');


//Route::get('/home', 'HomeController@index')->name('home');
