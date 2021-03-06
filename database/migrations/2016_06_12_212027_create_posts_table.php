<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('posts', function(Blueprint $table){
         $table->increments('post_id')->unsigned();
         $table->string('title');
         $table->longText('body');
         $table->string('tags');
         $table->string('description');
         $table->text('cover_image');
         $table->string('slug')->unique();
         $table->timestamps();
         $table->integer('user_id')->unsigned();

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
