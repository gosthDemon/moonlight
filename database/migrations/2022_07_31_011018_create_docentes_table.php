<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->increments('docente_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('materia_id');
            $table->string('carnet');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->date('nacimiento');
            $table->string('telefono');
            $table->string('direccion');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('materia_id')->references('materia_id')->on('materias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docentes');
    }
}
