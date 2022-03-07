<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->string('localidad');
            $table->string('direccion');
            $table->BigInteger('n_alumnos');
            $table->Integer('id_alumno');
            $table->Integer('id_tipo');
            $table->foreign('id_alumno')->references('id')->on('centros');
            $table->foreign('id_tipo')->references('id')->on('alumnos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centros');
    }
};
