<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdditionalinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additional_info', function(Blueprint $table){
          $table->increments('additional_info_id');
          $table->string('degree')->nullable();
          $table->string('phone')->nullable();
          $table->string('address')->nullable();
          $table->integer('user_id');

          $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
