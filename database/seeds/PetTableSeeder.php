<?php

use Illuminate\Database\Seeder;
use App\Pet;
use Carbon\Carbon;

class PetTableSeeder extends Seeder
{
	//public $img = 'test';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	   $img = 
     Image::make('http://cdn1-www.dogtime.com/assets/uploads/gallery/30-impossibly-cute-puppies/impossibly-cute-puppy-2.jpg')->encode('data-url');

        \DB::table('pets')->delete();
        Pet::create([
        	'userid' => 1,
        	'name' => 'Snuffles',
        	'type' => 1,
        	'dob' => '1999-12-31',
        	'weight' => 10.2,
        	'height' => 3.5,
        	'location' => 'hell',
        	'available' => 0,
        	'description' => 'a dog',
            'image' => $img,
        	]);

        Pet::create([
            'userid' => 2,
            'name' => 'Tinkles',
            'type' => 1,
            'dob' => '2003-04-03',
            'weight' => 3.2,
            'height' => 3.5,
            'location' => 'Texas',
            'available' => 1,
            'description' => 'a cat',
            'image' => $img,
            ]);     

        Pet::create([
            'userid' => 2,
            'name' => 'Winkles',
            'type' => 1,
            'dob' => '2003-04-03',
            'weight' => 3.2,
            'height' => 3.5,
            'location' => 'Texas',
            'available' => 1,
            'description' => 'a cat',
            'image' => $img,
            ]);     

        Pet::create([
            'userid' => 2,
            'name' => 'Pinkles',
            'type' => 1,
            'dob' => '2009-04-03',
            'weight' => 2.2,
            'height' => 1.5,
            'location' => 'Newark',
            'available' => 1,
            'description' => 'a rabbit',
            'image' => $img,
            ]);  

    }
}
