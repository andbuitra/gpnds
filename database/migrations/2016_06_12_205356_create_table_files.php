<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function(Blueprint $table){
          $table->increments('file_id')->unsigned();
          $table->string('url');
          $table->string('name');
          $table->string('ext');
          $table->string('image_uri');
          $table->integer('user_id')->unsigned();
          $table->timestamps();
          $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
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
