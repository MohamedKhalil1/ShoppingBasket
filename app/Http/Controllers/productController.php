<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function show($id)
    {
    	return view('product-details');
    }
}
