<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('comments', function(Blueprint $table){
         $table->increments('comment_id');
         $table->string('body');
         $table->integer('post_id')->unsigned();
         $table->integer('user_id')->unsigned();
         $table->timestamps();

         $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
         $table->foreign('post_id')->references('post_id')->on('posts')->onDelete('cascade');

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
