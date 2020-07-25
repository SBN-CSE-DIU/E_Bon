<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::group(['prefix'=>'/admin'], function() {
    Route::resource('product', 'ProductController');
});
Route::group(['prefix'=>'/admin'], function() {
    Route::resource('category', 'CategoryController');
});
Route::group(['prefix'=>'/users'], function() {
    Route::resource('users', 'UserViewController');
});




