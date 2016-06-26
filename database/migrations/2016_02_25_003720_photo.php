<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Photo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo', function (Blueprint $table) {
            $table->increments('id');

            $table->string('email');
            $table->string('photo');
            $table->string('name_f');
            $table->string('name_s');
            $table->string('yo');
            $table->string('city');
            $table->string('about');
            $table->rememberToken();
            $table->timestamps();
        });//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('photo'); //
    }
}
