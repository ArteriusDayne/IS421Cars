<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class AuthController extends Controller
{
	//just return login view
    public function login()
    {
		if(\Auth::check()){
			return redirect()->route('home');
		}
		else{
			return view('auth.login'); 
		}
    }

    public function handleLogin(Request $request)
    {
        $this->validate($request, User::$login_validation_rules);

    	$data = $request->only('email', 'password');

    	//attempt login
    	if(\Auth::attempt($data)){
    		return redirect()->intended('home');
    	}

    	//return to form if login unsucessful
    	return back()->withInput()->withErrors(['email' => 'Email or password invalid']);
    }

    public function logout()
    {
        \Auth::logout();
        return redirect()->route('login');
    }
}
