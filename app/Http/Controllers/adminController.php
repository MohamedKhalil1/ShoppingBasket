<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;
use App\Product;
use Auth;

class adminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest',['except' => 'logout']);
    // }
    
    public function index()
    {
    	return view('admin.home');
    }

    public function viewProducts()
    {
    	$products   = Product::all();
        $categories = ProductCategory::all();
    	return view('admin.product', compact('products', 'categories'));
    }

    public function addProduct(Request $request)
    {
    	$product        	          = new product;
        $product->name      	      = $request->name;
        $product->productimage        = request()->file('image')->store('images');
        $product->price               = $request->price;
        $product->stockquantity       = $request->quantity;
        $product->product_category_id = $request->category;

        $product->save();
        return redirect('admin/products');
    }

    public function editProduct($id)
    {
    	$product = Product::find($id);
    	return view('admin.edit-product', compact('product'));
    }


    public function updateProduct(Request $request, $id)
    {
    	$product        		= Product::find($request->id);
        $product->name        	= $request->name;
        $product->productimage  = request()->file('image')->store('images');
        $product->price         = $request->price;
        $product->stockquantity = $request->quantity;

        $product->save();
        return redirect('admin/products');
    }

    public function deleteProduct($id)
    {
        Product::find($id)->delete();
    	return redirect('admin/products');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function viewCategories()
    {
        $products   = Product::all();
        $categories = ProductCategory::all();
        return view('admin.categories', compact('products', 'categories'));
    }

    public function addCategory(Request $request)
    {
        $category           = new ProductCategory;
        $category->name     = $request->name;
        $category->discount = $request->discount;

        $category->save();
        return redirect('admin/categories');
    }

    public function editCategory($id)
    {
        $category = ProductCategory::find($id);
        return view('admin.edit-category', compact('category'));
    }

    public function updateCategory(Request $request, $id)
    {
        $category           = ProductCategory::find($request->id);
        $category->name     = $request->name;
        $category->discount = $request->discount;

        $category->save();
        return redirect('admin/categories');
    }

    public function deleteCategory($id)
    {
        ProductCategory::find($id)->delete();
        return redirect('admin/categories');
    }

}
