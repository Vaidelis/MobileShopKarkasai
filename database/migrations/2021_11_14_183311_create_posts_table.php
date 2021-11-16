<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');
            $table->string('brand');
            $table->string('model');
            $table->string('screensize');
            $table->string('ramsize');
            $table->string('storagesize');
            $table->string('color');
            $table->integer('price');
            $table->string('year');
            $table->timestamps();
            $table->string('username');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function($table)
        {

            $table->foreign('username')
                ->references('username')->on('users')
                ->onDelete('cascade');

        });

        Schema::dropIfExists('posts');
    }
}
