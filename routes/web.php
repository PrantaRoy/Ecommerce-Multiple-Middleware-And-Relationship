<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Admin Route Group

Route::group( ['as'=>'admin.','prefix'=>'admin', 'namespace'=>'Admin','middleware'=>['auth','admin']], function (){

Route::get('/dashboard','DashboardController@index')->name('dashboard');
    Route::resource('/product','ProductController');
    Route::get('/pending/product','ProductController@pending')->name('product.pending');
    Route::get('/check/product','ProductController@check')->name('product.check');
    Route::put('/product/{id}/approve','ProductController@approval')->name('product.approve');


});

//Supplier Route Group
Route::group( ['as'=>'supplier.', 'prefix'=>'supplier', 'namespace'=>'Supplier','middleware'=>['auth','supplier']], function (){

    Route::get('/dashboard','DashboardController@index')->name('dashboard');
    Route::resource('/category','CategoryController');
    Route::resource('/product','ProductController');
});
