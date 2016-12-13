<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Sale;
use App\Role;
use Redirect;
use Entrust;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Entrust::hasRole('admin')) return Redirect::to('/');

        return view('users.index')->with('users', User::all() );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		if(\Auth::check()){
			return redirect()->route('home');
		}
		else{
			return view('users.create'); 
		}
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, User::$create_validation_rules);

        $data = $request->only('name', 'telephone', 'email', 'password');
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        if($user)
        {
            \Auth::login($user);
            return redirect()->route('home');
        }
        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('users.edit')->with('user', User::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if($request['action'] == 'addRole')
        {
            $user = User::find($id);
            $role = (Role::where('name', '=', $request['role'])->first());
            $user->attachRole($role);
        }
        else if($request['action'] == 'deleteRole')
        {
            $user = User::find($id);
            $role = (Role::where('name', '=', $request['role'])->first());
            $user->detachRole($role);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function home()
    {
        return view('users.home', ['name' => \Auth::user()->name]);
    }
}
