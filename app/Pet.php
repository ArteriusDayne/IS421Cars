<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Pet extends Model
{
    protected $fillable = [
        'name', 'userid', 'dob', 'height', 'weight', 'location', 'description', 'image'
    ];

    public static $create_validation_rules = [
        'name' => 'required',
        'dob' => 'required',
        'weight' => 'required',
        'height' => 'required',
        'location' => 'required',
        'description' => 'required',
        'image' => 'required|image|mimes:jpg,png,jpeg'
    ]; 

    public static function getPetDetails($id)
    {
        return 
        DB::table('pets')->join('users', 'pets.userid','=','users.id')->select('pets.*', 'users.name as ownerName')->where('pets.id', '=', $id)->first();
    }
}
