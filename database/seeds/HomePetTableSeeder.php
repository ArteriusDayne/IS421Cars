<?php

use Illuminate\Database\Seeder;
use App\HomePet;

class HomePetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('home_pets')->delete();
         HomePet::create([
 			'location' => 'carousel',
 			'pet_id' => 1
        ]);
        HomePet::create([
 			'location' => 'carousel',
 			'pet_id' => 2
        ]);
        HomePet::create([
 			'location' => 'carousel',
 			'pet_id' => 3
        ]);
        HomePet::create([
 			'location' => 'carousel',
 			'pet_id' => 4
        ]);

    }
}
