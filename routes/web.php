<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/dashboard', function () {
    return view('dashboard.dashboard_compte_busness');
})->name('dashboard');
Route::get('/create_shop', function () {
    return view('dashboard.shop.create');
})->name('create_shop');
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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
