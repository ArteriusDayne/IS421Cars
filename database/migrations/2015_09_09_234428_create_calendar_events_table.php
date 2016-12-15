<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */

	//STEP 1: LOG In To psql (psql template1)
	//STEP 2: DROP Table calendar_events;
	//STEP 3: RUN sql below to create new table
	//create table calendar_events(id int primary key not null,
	// name char(100),description char(100), location char(100),eventstart timestamp,
	// eventend timestamp,created_at timestamp, updated_at timestamp );
	//STEP 4: Get out of psql
	//STEP 5: php artisan db:seed --class=CalendarEventTableSeeder



	public function up()
	{


		Schema::create('calendar_events', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name',100);
			$table->string('description',100);
			$table->string('location',100);
			$table->timestamp('eventstart');
			$table->timestamp('eventend');
			$table->timestamps();

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('calendar_events');
	}

}
