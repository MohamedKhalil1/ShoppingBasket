<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\ShoppingBasket;
use \App\Product;


class cartController extends Controller
{
    public function show()
    {
    	$products = Product::all();
    	return view('cart', compact('products'));
    }

    public function delete($id)
    {
        Product::find($id)->delete();
    	return redirect('/cart');
    }
}
