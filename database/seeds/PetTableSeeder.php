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
        	'userid' => 1,
        	'name' => 'Snuffles',
        	'type' => 1,
        	'dob' => '1999-12-31',
        	'weight' => 10.2,
        	'height' => 3.5,
        	'location' => 'hell',
        	'available' => 0,
        	'description' => 'a dog',
        	]);

    }
}
