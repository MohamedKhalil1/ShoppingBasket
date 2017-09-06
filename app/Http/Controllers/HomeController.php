<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \App\ProductCategory;
use \App\Product;
use \App\User;
use Auth;


class HomeController extends Controller
{
    
    public function index()
    {
        $products   = Product::all();
        $categories = ProductCategory::all();
        return view('home', compact('products', 'categories'));
    }
}
