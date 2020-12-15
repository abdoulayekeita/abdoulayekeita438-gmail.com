<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::namespace('Auth')->group(function () {
    Route::get('register', 'AuthController@showRegistrationForm')->name('register');
    Route::post('register', 'AuthController@register');
});


Route::namespace('Dashboard')->prefix('dashboard')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/', 'DashboardController')->name('dashboard');
        Route::post('/product/image/upload', 'ImageUploadController@store');
        Route::get('/product/image/delete', 'ImageUploadController@destroy');
        Route::post('/search_annonce', 'SearchController@searchPost')->name('search.post');
        Route::post('/search_product/{shop}', 'SearchController@searchProduct')->name('search.product');
        Route::get('/valide_post/{post}', 'AdminController@validePost')->name('valide.post');
        Route::get('/valide_shop/{shop}', 'AdminController@valideShop')->name('valide.shop');
        Route::get('/annule_validation_post/{post}', 'AdminController@annuleValidationPost')->name('annule_valide.post');
        Route::get('/annule_validation_shop/{shop}', 'AdminController@annuleValidationShop')->name('annule_valide.shop');
        Route::get('/shop_list', 'AdminController@listShop')->name('list_shop');
        Route::get('/validation_post/{post}', 'AdminController@formValidePost')->name('form_valide_post');
        Route::post('/validation_post', 'AdminController@cancelPost')->name('cancel_post');
        Route::get('/validation_shop/{shop}', 'AdminController@formValideShop')->name('form_valide_shop');
        Route::post('/validation_shop/', 'AdminController@cancelShop')->name('cancel_shop');
        Route::resource('shop', 'ShopController');
        Route::resource('shop.product', 'ProductController');
        Route::resource('post', 'PostController');
        Route::get('/contact', 'PageController@contact')->name('contact');
    });
    Route::get('/how_it_work', 'PageController@howItWork')->name('how_it_work');
});

Route::namespace('Home')->group(function () {
    Route::get('/', 'HomeController@home')->name('home');
    Route::get('/Terms_of_use', 'HomeController@TermsOfUse')->name('Terms_of_use');
    Route::get('/Who_are_we', 'HomeController@WhoAreWe')->name('Who_are_we');
    Route::get('/category/{subCategory}', 'HomeController@category')->name('category');
    Route::get('/shop', 'HomeController@shop')->name('shop');
    Route::get('/shop_content/{shop}', 'HomeController@shopContent')->name('shop_content');
    Route::get('/detail_product/{shop}/{product}', 'HomeController@shopShow')->name('shop_show');
    Route::get('/detail_post/{post}', 'HomeController@postShow')->name('post_show');
    Route::post('/search_annonce', 'HomeController@searchPost')->name('home_search.post');
});
