<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserTableSeeder::class);
         $this->call(PetTableSeeder::class);
         $this->call(RoleTableSeeder::class);
         $this->call(RoleUserTableSeeder::class);
         $this->call(HomePetTableSeeder::class);
         $this->call(EventTableSeeder::class);
         $this->call(CalendarEventTableSeeder::class);
    }
}
