<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use App\CalendarEvent;

class CalendarEventTableSeeder extends Seeder {

    public function run()
    {
        CalendarEvent::create([
            'id' => 1,
            'name' => 'Adoption City',
            'description' => 'Cat Adoption',
            'location' => 'New York',
            'eventstart' => '2016-12-17 10:00:00',
            'eventend' => '2016-12-17 12:00:00',

        ]);

        CalendarEvent::create([
            'id' => 2,
            'name' => 'Adoption Complex',
            'description' => 'Turkey Adoption',
            'location' => 'Hawaii U',
            'eventstart' => '2016-12-22 12:00:00',
            'eventend' => '2016-12-22 15:00:00',


        ]);

        CalendarEvent::create([
            'id' => 3,
            'name' => 'Adoption House',
            'description' => 'Dog Adoption',
            'location' => 'California',
            'eventstart' => '2016-12-10 14:00:00',
            'eventend' => '2016-12-10 16:00:00',

        ]);

    }

}
