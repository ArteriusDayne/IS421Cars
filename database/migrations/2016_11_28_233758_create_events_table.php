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
        $table->string('title', 100);
        $table->string('location',100);
        $table->dateTime('startdate');
        $table->dateTime('enddate');
        $table->string('description', 1000);
        $table->integer('vacancy')->default(0);
        $table->tinyInteger('active')->default(0);
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
