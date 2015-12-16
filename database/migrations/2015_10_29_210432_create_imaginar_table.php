<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImaginarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imaginar', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nombre');
            $table->longtext('contenido');
            $table->integer('actividad_id')->unsigned();
            $table->foreign('actividad_id')->references('id')->on('actividades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('imaginar');
    }
}
