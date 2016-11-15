<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $primaryKey = 'vin';
    public $incrementing = false;

    protected $fillable = [
        'vin', 'year', 'make', 'model', 'price'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public static $create_validation_rules = [
        'vin' => 'required|unique:cars',
        'year' => 'required',
        'make' => 'required',
        'model' => 'required',
        'price' => 'required'
    ]; 
}
