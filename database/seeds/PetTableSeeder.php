<?php

use Illuminate\Database\Seeder;
use App\Pet;
use Carbon\Carbon;

class PetTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('pets')->delete();
        Pet::create([
            'id' => 1,
        	'userid' => 1,
        	'name' => 'Snuffles',
        	'type' => 1,
        	'dob' => '1999-12-31',
        	'weight' => 10.2,
        	'height' => 3.5,
        	'location' => 'ohio',
        	'available' => 0,
        	'description' => 'a dog',
            'image' => Image::make('public/img/puppers/sized/corgi.jpg')->encode('data-url'),
        	]);

        Pet::create([
            'id' => 2,
            'userid' => 2,
            'name' => 'Tinkles',
            'type' => 1,
            'dob' => '2003-04-03',
            'weight' => 3.2,
            'height' => 3.5,
            'location' => 'Texas',
            'available' => 1,
            'description' => 'a cat',
            'image' => Image::make('public/img/puppers/sized/cutepupper.jpg')->encode('data-url'),
            ]);     

        Pet::create([
            'id' => 3,
            'userid' => 2,
            'name' => 'Winkles',
            'type' => 1,
            'dob' => '2003-04-03',
            'weight' => 3.2,
            'height' => 3.5,
            'location' => 'Texas',
            'available' => 1,
            'description' => 'a cat',
            'image' => Image::make('public/img/puppers/sized/puppers.jpg')->encode('data-url'),
            ]);     

        Pet::create([
            'id' => 4,
            'userid' => 2,
            'name' => 'Pinkles',
            'type' => 1,
            'dob' => '2009-04-03',
            'weight' => 2.2,
            'height' => 1.5,
            'location' => 'Newark',
            'available' => 1,
            'description' => 'a rabbit',
            'image' => Image::make('public/img/puppers/sized/doggo.jpg')->encode('data-url'),
            ]);

        Pet::create([
            'id' => 5,
            'userid' => 2,
            'name' => 'Snow White',
            'type' => 1,
            'dob' => '2009-04-03',
            'weight' => 2.2,
            'height' => 1.5,
            'location' => 'Newark',
            'available' => 1,
            'description' => 'a dog',
            'image' => Image::make('public/img/puppers/sized/pomsky.jpg')->encode('data-url'),
            ]);

        Pet::create([
            'id' => 6,
            'userid' => 2,
            'name' => 'Mickey',
            'type' => 1,
            'dob' => '2009-04-03',
            'weight' => 2.2,
            'height' => 1.5,
            'location' => 'Newark',
            'available' => 1,
            'description' => 'a hamster',
            'image' => Image::make('public/img/puppers/sized/hamster-1.jpg')->encode('data-url'),
            ]);
        Pet::create([
            'id' => 7,
            'userid' => 2,
            'name' => 'Doodle',
            'type' => 1,
            'dob' => '2009-04-03',
            'weight' => 2.2,
            'height' => 1.5,
            'location' => 'Newark',
            'available' => 1,
            'description' => 'a hamster',
            'image' => Image::make('public/img/puppers/sized/doggo2.jpg')->encode('data-url'),
            ]);
    }
}
