<?php


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
// Route::get('/cart/products/{id}', 'cartController@showProduct');
// Route::post('/cart/products/{id}', 'cartController@storeProduct');
// Route::post('/cart/delete', 'cartController@delete');

/*----------  Admin controller  ----------*/
Route::group(['prefix' => 'admin'], function() {
	Route::get('/', 'adminController@index');
	Route::get('products', 'adminController@viewProducts');
	Route::post('product/add', 'adminController@addProduct');
	Route::get('products/edit/{id}', 'adminController@editProduct');
	Route::put('products/update/{id}', 'adminController@updateProduct');
	Route::get('products/delete/{id}', 'adminController@deleteProduct');

});



