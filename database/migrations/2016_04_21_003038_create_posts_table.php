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
      Schema::create('posts', function (Blueprint $table) {
          $table->increments('post_id')->unsigned();
          $table->string('title');
          $table->string('body');
          $table->string('tags');
          $table->string('user_id');
          $table->timestamps();

          $table->primary('post_id');

          $table->foreign('user_id')
                ->references('user_id')
                ->on('users')
                ->onDelete('cascade');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
