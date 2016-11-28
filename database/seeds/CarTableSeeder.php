<?php

use Illuminate\Database\Seeder;
use App\Car;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::create([
        	'vin' => 'ad8f93fjjjfj3w98',
        	'year' => '2001',
        	'make' => 'ford',
        	'model' => 'focus',
        	'saleStatus' => 'pending',
            'price' => '3500'
        	]);

        Car::create([
        	'vin' => 'f832q8dj23jj2io3',
        	'year' => '2012',
        	'make' => 'honda',
        	'model' => 'civic',
        	'saleStatus' => 'sold',
            'price' => '9000'
        	]);        
    }
}
