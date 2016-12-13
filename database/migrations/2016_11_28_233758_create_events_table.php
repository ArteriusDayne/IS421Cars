<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name', 200);
        $table->string('description', 100);
        $table->string('location',100);
        $table->string('calendar');
        $table->dateTime('start','Y,m,j,H,m,s');
        $table->dateTime('end','Y,m,j,H,m,s');
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
        Schema::drop('events');
    }
}
