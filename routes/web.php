<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['prefix'=>'/admin', 'middleware'=>['auth', 'admin']], function() {
    Route::resource('product', 'ProductController');
    Route::resource('category', 'CategoryController');
    Route::resource('product_status', 'ProductController');
    Route::resource('order_status', 'ProductController');
//    Route::resource('order', 'OrderController');

    Route::get('/', ['as'=>'admin_dashboard', 'uses'=>'AdminController@dashboard']);
});

Route::get('/checkout', ['as'=>'checkout', 'uses'=>'UserController@checkout'])->middleware('auth', 'user');
Route::resource('/order', 'OrderController')->middleware('auth', 'user');

Route::get('/', ['as'=>'home', 'uses'=>'HomeController@index']);
Route::get('/home', ['as'=>'home', 'uses'=>'HomeController@index']);
//
//Route::get('/name',function(){
//    return view('admin/product/create');
//})->name('name');
//
//Route::get('/pro',function(){
//    $rows = Product::all();
//return view('admin/product/index', compact(['rows']));
//})->name('pro');

