<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post__usuarios', function (Blueprint $table) {
            $table->integer('id_post')->unsigned();
            $table->string('profileID');
            $table->primary(array('id_post', 'profileID'));
            $table->foreign('id_post')->references('id')->on('posts');
            $table->foreign('profileID')->references('profileID')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('post__usuarios');
    }
}
