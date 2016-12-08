<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class HomePet extends Model
{
    protected $table = 'home_pets';
    public $timestamps = false;

    public static function getHomePets()
    {
    	return 
    	DB::table('home_pets')->join('pets', 'pets.id', '=', 'home_pets.pet_id')->select('pets.name', 'home_pets.caption', 'home_pets.location','pets.image')->get();
    }

    //return base64 images of pets on front page carousel
    public static function getCarouselPets()
    {
    	return 
    	DB::table('home_pets')->join('pets', 'pets.id', '=', 'home_pets.pet_id')->select('pets.name', 'home_pets.caption', 'pets.image')->where('home_pets.location', '=', 'carousel')->get();
    }
}
