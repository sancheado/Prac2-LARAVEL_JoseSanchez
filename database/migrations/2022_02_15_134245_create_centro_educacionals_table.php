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
        Schema::create('centro_educacionals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->string('localidad');
            $table->string('tipo_estudios');
            $table->string('direccion');

            $table->unsignedBiInteer('id_centro');
            $table->foreign('id_centro')
                ->references('id')
                ->on('alumnos')
                ->onDelete('cascade');  
            $table->unsignedBiInteer('id_tipo');
            $table->foreign('id_tipo')
                ->references('id')
                ->on('tipo_estudios')
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
        Schema::dropIfExists('centro_educacionals');
    }
};
