<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('alumno_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('tutor_id');
            $table->unsignedInteger('grado_id');
            $table->string('carnet');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->date('nacimiento');
            $table->string('telefono');
            $table->string('direccion');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('tutor_id')->references('tutor_id')->on('tutores');
            $table->foreign('grado_id')->references('grado_id')->on('grados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
