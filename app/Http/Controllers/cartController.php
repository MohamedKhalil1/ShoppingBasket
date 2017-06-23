<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\ShoppingBasket;
use \App\Product;


class cartController extends Controller
{
    public function show()
    {
    	$products = ShoppingBasket::all()->products;
    	return view('cart', compact($products));
    }
}
