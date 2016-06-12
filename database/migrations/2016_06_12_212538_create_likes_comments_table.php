<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikesCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('likes_comments', function(Blueprint $table){
         $table->increments('like_comment_id');
         $table->integer('comment_id')->unsigned();
         $table->integer('user_id')->unsigned();
         $table->foreign('comment_id')->references('comment_id')->on('comments')->onDelete('cascade');
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
