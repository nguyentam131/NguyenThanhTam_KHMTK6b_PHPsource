<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return view('greeting',['name'=>'Jame']);
});

Route::get('/home', function () {
    return ('<h1>Hello hà nội</h1>');
});

Route::group(['prefix' =>'admin'],function(){

    Route::group(['prefix'=>'product'], function(){
        Route::get('/getProducts','App\Http\Controllers\ProductController@getProducts')->name('admin.product.getProducts');
        Route::get('/getProductsByBand','App\Http\Controllers\ProductController@getProductsByBand')->name('admin.product.getProductsByBand');
        Route::get('/insertProduct','App\Http\Controllers\ProductController@forminsertProduct');
        Route::post('/insertProduct','App\Http\Controllers\ProductController@insertProduct');
        Route::get('/deleteProduct/{pid}','App\Http\Controllers\ProductController@deleteProduct');
        #Route::get('/getProductsbyYear','App\Http\Controllers\ProductController@getProductsbyYear')->name('admin.product.getProductsByBand');
        #Route::get('/inseartProduct','App\Http\Controllers\ProductController@inseartProduct');
        #Route::get('/updateProduct','App\Http\Controllers\ProductController@updateProduct');
        #Route::get('/deleteProduct','App\Http\Controllers\ProductController@deleteProduct');

    });
    Route::group(['prefix'=>'order'], function(){

    });
    Route::group(['prefix'=>'orderdetail'], function(){

    });
    Route::group(['prefix'=>'customer'], function(){
        Route::get('/getCustomer','App\Http\Controllers\CustomerController@getCustomers');

    });

});