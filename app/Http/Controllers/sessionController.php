<?php

namespace App\Http\Controllers;
use \App\ProductCategory;
use Auth;

use Illuminate\Http\Request;

class sessionController extends Controller
{
	public function show()
    {
        $categories = ProductCategory::all();
    	return view('login', compact('categories'));
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
            'email'    => 'required | email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->has('remember'))) {
            if (Auth::user()->type == 'admin') {
                return redirect('admin');
            }   
            elseif (Auth::user()->type == 'user') {
                return redirect('/');
            }  
            else {
            	return back()->withErrors([
            		'message' => 'Email or password are not correct'
            	]);
            }	
        }
    }    

    public function logout()
    {
    	Auth::logout();
     	return redirect('/');
    }
}
