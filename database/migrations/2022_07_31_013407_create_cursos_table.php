<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('curso_id');
            $table->unsignedInteger('materia_id');
            $table->unsignedInteger('docente_id');
            $table->string('nombre');
            $table->foreign('materia_id')->references('materia_id')->on('materias');
            $table->foreign('docente_id')->references('docente_id')->on('docentes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
