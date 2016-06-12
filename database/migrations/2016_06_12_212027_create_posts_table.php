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
         $table->integer('specialist_id')->unsigned();

         $table->foreign('specialist_id')->references('specialist_id')->on('specialists');

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
