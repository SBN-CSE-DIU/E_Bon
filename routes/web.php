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

Route::get('/', function () {
    return view('users/home');
});
Route::get('/r', function () {
    return view('admin/pages/registration');
});

Route::get('/d', function () {
    return view('welcome');
});
Route::get('/dd', function () {
    return view('admin/layout_admin/layout');
});
Route::get('/all-user', function () {
    return view('admin/pages/all-user');
});
Route::get('/all-product', function () {
    return view('admin/pages/all-product');
});
Route::get('/product-entry', function () {
    return view('admin/pages/Product_Entry');
});
Route::get('/product-update', function () {
    return view('admin/pages/Product-update');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
