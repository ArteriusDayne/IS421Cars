<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pet;
use Entrust;
use Redirect;
use Image;
use Illuminate\Support\Facades\Response;

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

        //convert uploaded image to base64
        $img = $request->file('image');
        $image = (string) Image::make($img)->encode('data-url');


        //insert pet details (current user ID)
        $data = $request->only('name', 'dob', 'weight', 'height', 'location', 'description');

        $data['userid'] = \Auth::user()->id;
        $data['image'] = $image;


        //get new pet id and generate unique image name
        $pet = Pet::create($data);

        if($pet)
        {
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
