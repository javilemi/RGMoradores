<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMoradoresTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moradores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cedula')->unique();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('direccion');
            $table->integer('telefono');
            $table->integer('libro');
            $table->integer('folio');
            $table->integer('numero');
            $table->string('tipo');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('moradores');
    }
}
