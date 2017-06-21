<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

class productController extends Controller
{
    public function show($id)
    {
    	$product = Product::find($id);
    	return view('product-details', compact('product'));
    }
}
