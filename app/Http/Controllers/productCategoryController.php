<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\ProductCategory;
use \App\Product;

class productCategoryController extends Controller
{
    public function show()
    {
    	return view('categories');
    }

    public function showCategory($id)
    { 
    	$categories = ProductCategory::all();
    	$category   = ProductCategory::find($id);

    	if($category){
       		$products = Product::where('product_category_id',$id)->get();
    		return view('categories.category-details', compact('categories', 'category', 'products'));	
    	}
    }
}
