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

    public function redirectToProvider(){
        return Socialite::driver('google')->redirect();
    }
    public function handleProviderCallback(){
        $user = Socialite::driver('google')->user();
        // dd($user);
        $checkUser = User::where('email', $user['email'])->first();
        if ($checkUser){
            return redirect()->intended('home');
        }else{
            User::create([
            'email' => $user['email'],
            'password' => bcrypt(bcrypt($user['id'])),
            'telephone' => '1234567890',
            'name' => $user['email'],
            'account_type' => 'google',
            'sns_acc_id' => $user['id']
            ]);

            return redirect()->intended('home');
        }
    }
}
