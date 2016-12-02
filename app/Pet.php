<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = [
        'name', 'userid', 'dob', 'height', 'weight', 'location', 'description', 'image'
    ];
}
