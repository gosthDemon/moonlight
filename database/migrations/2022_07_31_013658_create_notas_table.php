<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('notas_id');
            $table->unsignedInteger('alumno_id');
            $table->unsignedInteger('curso_id');
            $table->unsignedInteger('area_id');
            $table->integer('calificacion');
            $table->string('razon');
            $table->string('trimestre');
            $table->foreign('alumno_id')->references('alumno_id')->on('alumnos');
            $table->foreign('curso_id')->references('curso_id')->on('cursos');
            $table->foreign('area_id')->references('area_id')->on('areas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas');
    }
}
