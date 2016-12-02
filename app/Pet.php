<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        'image' => 'required|image|mimes:jpg,png'
    ]; 
}
