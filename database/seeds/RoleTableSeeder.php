<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
        	'name' => 'admin',
        	'display_name' => 'Administrator',
        	'description' => 'Can do anything',
        	]);    
        Role::create([
            'name' => 'provider',
            'display_name' => 'Provider',
            'description' => 'User can add/edit/delete own pet listings'
            ]);    
        Role::create([
            'name' => 'adopter',
            'display_name' => 'Adopter',
            'description' => 'User can adopt pets'
            ]);         
    }
}
