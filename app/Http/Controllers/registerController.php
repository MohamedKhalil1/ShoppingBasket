<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class registerController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest');
	}

     public function show()
    {
    	return view('register');
    }

    public function store(Request $request)
    {
    	$this->validate(request(), [
    		'name' => 'required',
    		'email' => 'required | email',
    		'password' => 'required | confirmed'
    	]);

	  	$user           = new User;
        $user->name     = $request['name'];
        $user->email    = $request['email'];
        $user->password = bcrypt($request['password']);

        $user->save();

    	auth()->login($user);

    	return redirect('/');

    }
}
