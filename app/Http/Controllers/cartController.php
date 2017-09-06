<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\ProductCategory;
use \App\ShoppingBasket;
use \App\Product;


class cartController extends Controller
{
    public function show()
    {
    	$products = Product::all();
        $categories = ProductCategory::all();

    	return view('cart', compact('products', 'categories'));
    }

    public function delete($id)
    {
        Product::find($id)->delete();
    	return redirect('/cart');
    }
}
