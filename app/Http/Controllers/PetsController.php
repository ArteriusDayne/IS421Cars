<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pet;
use Entrust;
use Redirect;

class PetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pets.index')->with('pets', Pet::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Entrust::hasRole('provider'))
        {
            return view('pets.create');
        }

        return Redirect::to('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Pet::$create_validation_rules);

        //insert pet details w/o photo - (current user ID)
        $data = $request->only('name', 'dob', 'weight', 'height', 'location', 'description');

        $data['userid'] = \Auth::user()->id;
        $data['image'] = 'test.jpg';

        //get new pet id and generate unique image name
        $pet = Pet::create($data);

        if($pet)
        {
            $img = $request->file('image');
            $destinationPath = 'img/animals/providerUpload';
            $imgName = 'pet-'. $pet->id . '-'.$img->getClientOriginalName();
            $img->move($destinationPath, $imgName);
            
            //update pet to have its image field point to right place
            $pet->image = $imgName;
            $pet->save();  

            return back()->with('success', ['Pet added for adoption!']);
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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


}