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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/product/{slug}', 'HomeController@show')->name('product');

Route::group(['middleware' => ['guest']], function() {
    Route::get('/login', 'Auth\\LoginController@index')->name('login');
    Route::post('/login', 'Auth\\LoginController@doLogin')->name('doLogin');
});

Route::prefix('admin')->name('admin.')->group(function() {
    Route::group(['middleware' => ['auth', 'admin']], function() {
        Route::get('/', 'Admin\\HomeController@index')->name('index');
        Route::resource('products', 'Admin\\ProductsController');
        Route::post('/productPhoto/delete', 'Admin\\ProductPhotoController@destroy')->name('productPhoto.delete');
    });
});

Route::prefix('cart')->name('cart.')->group(function() {
    Route::get('/', 'CartController@index')->name('index');
});
