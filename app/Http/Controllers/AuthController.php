<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;

use App\Http\Requests;
use App\User;

class AuthController extends Controller
{
	//just return login view
    public function login()
    {
    	return view('auth.login'); 
    }

    public function handleLogin(Request $request)
    {
        $this->validate($request, User::$login_validation_rules);

    	$data = $request->only('username', 'password');

    	//attempt login
    	if(\Auth::attempt($data)){
    		return redirect()->intended('home');
    	}

    	//return to form if login unsucessful
    	return back()->withInput()->withErrors(['username' => 'Username or password invalid']);
    }

    public function logout()
    {
        \Auth::logout();
        return redirect()->route('login');
    }

    public function redirectToProvider(){
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback(){
        $user = Socialite::driver('google')->user();
        // dd($user);
        $checkUser = User::where('username', $user['email'])->first();

        if ($checkUser){
            return redirect()->intended('home');
        }else{
            User::create([
            'username' => $user['email'],
            'password' => bcrypt($user['id']),
            'firstName' => 'Bob',
            'lastName' => 'Bobbinson',
            'account_type' => 'google',
            'sns_acc_id' => $user['id']
            ]);
        }

    }
}
