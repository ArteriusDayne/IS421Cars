<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::find(2)->attachRole(App\Role::find(1));
        App\User::find(2)->attachRole(App\Role::find(2));
        App\User::find(1)->attachRole(App\Role::find(2));
    }
}
