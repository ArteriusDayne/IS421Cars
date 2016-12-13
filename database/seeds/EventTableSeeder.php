<?php
use Illuminate\Database\Seeder;
use App\Event;
class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Event::create([
            'id' => 1,
            'name' => 'Adoption City',
            'description' => 'Cat Adoption',
            'location' => 'New York',
            'calendar' => 'The Doghouse',
            'start' => '2016,11,25',
            'end' => '2016,10,25',

        ]);

        Event::create([
            'id' => 2,
            'name' => 'Adoption Complex',
            'description' => 'Turkey Adoption',
            'location' => 'Hawaii U',
            'calendar' => 'Hawaii',
            'start' => '2016,11,25',
            'end' => '2016,10,26',


        ]);

        Event::create([
            'id' => 3,
            'name' => 'Adoption House',
            'description' => 'Dog Adoption',
            'location' => 'California',
            'calendar' => 'Mother Russia',
            'start' => '2016,10,24',
            'end' => '2016,10,25',
        ]);

    }
}
