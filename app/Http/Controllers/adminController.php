<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Auth;

class adminController extends Controller
{
    public function index()
    {	
    	return view('AdminDashboard.home');
    }

    public function viewProducts()
    {	
    	$products = Product::all();
    	return view('AdminDashboard.product', compact('products'));
    }

    public function addProduct(Request $request)
    {	
    	$product        		= new product;
        $product->name      	= $request->name;
        $product->productimage  = request()->file('image')->store('images');
        $product->price         = $request->price;
        $product->stockquantity = $request->quantity;    
        
        $product->save();
        return redirect('admin/products');
    }

    public function editProduct($id)
    {
    	$product = Product::find($id);
    	return view('AdminDashboard.edit-product', compact('product'));
    }
    

    public function updateProduct(Request $request, $id)
    {	
    	$product        		= Product::find($request->id);
        $product->name      	= $request->name;
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

}
