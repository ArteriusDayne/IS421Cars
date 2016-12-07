<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        User::create([
        	'email' => 'sl597@mail.com',
        	'password' => bcrypt('sl090195'),
            'name' => 'Sabrina Lam',
            'telephone' => '000-000-0000',
        	]);
        User::create([
            'email' => 'bob@mail.com',
            'password' => bcrypt('bob'),
            'name' => 'Bob Bobbinson',
            'telephone' => '000-000-0001',
            ]);
    }
}
