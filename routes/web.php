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

Route::get('/admin', function() {
    return 'admin';
});


Route::prefix('/admin')->group(function () {
    Route::get('/home', function(){
        return view('admin.index');
    });
    // //DashBoard
    //     Route::get('', function () {
    //         return view('admin/dashboard');
    //     })->middleware('admin');
    //Manufacturer
        Route::get('/list_manufacturer', 'AdminManufacturerController@index');
        Route::get('/add_manufacturer', 'AdminManufacturerController@create');
        Route::post('/add_manufacturer', 'AdminManufacturerController@store');
        Route::get('/edit_manufacturer/{id}', 'AdminManufacturerController@edit');
        Route::post('/edit_manufacturer/{id}', 'AdminManufacturerController@update');
        Route::post('/delete_manufacturer/{id}', 'AdminManufacturerController@destroy');
    //Category
        Route::get('/list_category', 'AdminCategoryController@index');
        Route::get('/add_category', 'AdminCategoryController@create');
        Route::post('/add_category', 'AdminCategoryController@store');
        Route::get('/edit_category/{id}', 'AdminManufacturerController@edit');
        Route::post('/edit_category/{id}', 'AdminManufacturerController@update');
        Route::post('/delete_category/{id}', 'AdminManufacturerController@destroy');
    //Product
        Route::get('/list_product', 'AdminProductController@index');
        Route::get('/add_product', 'AdminProductController@create');
        Route::post('/add_product', 'AdminProductController@store');
        Route::post('/delete_product/{id}', 'AdminProductController@destroy');
        Route::get('/edit_product/{id}', 'AdminProductController@edit');
        Route::post('/edit_product/{id}', 'AdminProductController@update');
    //User
        Route::get('/list_user', 'AdminUserController@index');
});

Route::get('/test', function() {
    return view('admin.nav');
});