<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableForumQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forum_questions', function(Blueprint $table){
          $table->increments('forum_question_id')->unsigned();
          $table->string('title');
          $table->longText('body');
          $table->string('tags');
          $table->string('slug')->unique();
          $table->timestamps();
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
