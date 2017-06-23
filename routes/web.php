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
	Route::post('addProduct', 'adminController@addProduct');
	Route::get('editProduct/{id}', 'adminController@editProduct');
	Route::put('updateProduct', 'adminController@updateProduct');
	Route::delete('deleteProduct/{id}', 'adminController@deleteProduct');

});



