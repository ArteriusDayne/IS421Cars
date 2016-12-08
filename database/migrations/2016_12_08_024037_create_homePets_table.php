<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pets', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('location', array('carousel', 'featured'));
            $table->integer('pet_id');
            $table->string('caption')->default('pet');
        });

        Schema::table('home_pets', function($table){
            $table->foreign('pet_id')->references('id')->on('pets');
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('home_pets');
    }
}
