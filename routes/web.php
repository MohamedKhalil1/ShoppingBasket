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

/*----------  home controller  ----------*/
Route::get('/', 'HomeController@index');

/*----------  registeration controller  ----------*/
Route::get('/register', 'registerController@show');
Route::post('/register', 'registerController@store');

/*----------  session controller  ----------*/
Route::get('/login', 'sessionController@show');
Route::post('/login', 'sessionController@store');
Route::get('/logout', 'sessionController@logout');


/*----------  products controller  ----------*/
Route::get('/products/{id}', 'productController@show');


/*----------  product categories controller  ----------*/
Route::get('/categories', 'productCategoryController@show');


/*----------  cart controller  ----------*/
Route::get('/cart', 'cartController@show');
Route::post('/cart', 'cartController@store');


