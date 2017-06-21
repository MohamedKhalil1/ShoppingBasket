<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Product;
use \App\User;
use Auth;


class HomeController extends Controller
{
    
    public function index()
    {
        $products = Product::all();
        return view('home', compact('products'));
    }
}
