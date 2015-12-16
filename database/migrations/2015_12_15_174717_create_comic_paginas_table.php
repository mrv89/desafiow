<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComicPaginasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics_paginas', function (Blueprint $table) {
            $table->increments('id');            
            $table->longtext('url_img');
            $table->integer('posicion');
            $table->integer('comic_id')->unsigned();
            $table->foreign('comic_id')->references('id')->on('comics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comics_paginas');
    }
}
