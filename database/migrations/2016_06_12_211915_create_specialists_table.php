<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('specialists', function(Blueprint $table){
         $table->increments('specialist_id')->unsigned();
         $table->string('degree')->nullable();
         $table->string('phone')->nullable();
         $table->string('address')->nullable();
         $table->integer('user_id')->unsigned();

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
