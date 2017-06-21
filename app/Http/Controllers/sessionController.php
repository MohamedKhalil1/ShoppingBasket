<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class sessionController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest',['except' => 'logout']);
	}
	public function show()
    {
    	return view('login');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
            'email'    => 'required | email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->has('remember'))) {
            return redirect('/');
        }
        else {
        	return back()->withErrors([
        		'message' => 'Email or password are not correct'
        	]);
        }	
    }

    public function logout()
    {
    	Auth::logout();
     	return redirect('/');
    }
}
