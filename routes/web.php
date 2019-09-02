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

Route::get('/', 'MainController@getHomePage');
Route::get('/details/{id}', 'MainController@getDetailsPage');

/*Route::get('/login', function () {return view('content.login');});
Route::get('/register', function () {return view('content.register');});
Route::get('/details', function () {return view('content.details');});*/

Route::middleware(['auth'])->group(function () {
Route::get('/cart', function () {return view('user.cart');});
});


Route::middleware(['admin'])->group(function () {
    Route::get('/products/', "ProductController@index")->name('products');
    Route::get('/products/create',"ProductController@create");
    Route::post('/products', "ProductController@store");
    Route::get('/products/{products}', "ProductController@details");
    Route::get('/products/{products}/edit', "ProductController@edit");
    Route::put('/products/{products}/', "ProductController@update");
    Route::delete('/products/{products}', "ProductController@destroy");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
