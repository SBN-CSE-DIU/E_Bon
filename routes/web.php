<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::group(['prefix'=>'/admin'], function() {
    Route::resource('product', 'ProductController');
    Route::resource('category', 'CategoryController');
    Route::resource('product_status', 'ProductController');
    Route::resource('order_status', 'ProductController');
});

Route::get('/', ['as'=>'home', 'uses'=>'HomeController@index']);
Route::get('/home', ['as'=>'home', 'uses'=>'HomeController@index']);

//Route::get('/', function () {
//    return view('users/home');
//});
//Route::get('/r', function () {
//    return view('admin/pages/registration');
//});
//

//
//Route::get('/dd', function () {
//    return view('admin/layout/layout');
//});
//
//Route::get('/all-user', function () {
//    return view('admin/pages/all-user');
//});
//
//Route::get('/all-product', function () {
//    return view('admin/pages/all-product');
//});
//
//Route::get('/product_entry', function () {
//    return view('admin/pages/Product_Entry');
//});
//
//Route::get('/product-update', function () {
//    return view('admin/pages/Product-update');
//});

