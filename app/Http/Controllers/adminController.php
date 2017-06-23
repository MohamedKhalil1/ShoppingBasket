<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class adminController extends Controller
{
    public function index()
    {	
    	return view('AdminDashboard.admin');
    }

    public function viewProducts()
    {	
    	$products = Product::all();
    	return view('AdminDashboard.admin-product', compact('products'));
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

    public function deleteProduct(Request $id)
    {
        $product = Product::find($id);
    	$product->delete();

    	return redirect('admin/products');
    }

}
