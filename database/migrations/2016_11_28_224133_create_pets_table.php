<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('userid');
        //$table->bigInteger('upi');
        $table->string('name', 100);
        $table->tinyInteger('type')->default(0);
        $table->date('dob');
        $table->decimal('weight',5,2);
        $table->decimal('height',5,2);
        $table->string('location', 100);
        $table->tinyInteger('available')->default(0);
        $table->string('description', 1000);
        $table->timestamps();
        });

        Schema::table('pets', function($table){
            $table->foreign('userid')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pets');
    }
}
