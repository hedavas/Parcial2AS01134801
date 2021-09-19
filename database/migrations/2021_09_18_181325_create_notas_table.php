<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('idnota');
            $table->integer('nota1');
            $table->integer('nota2');
            $table->integer('nota3');
            $table->integer('nota4');
            $table->integer('promedio');
            $table->integer('parcial');
            $table->unsignedInteger('idprofesor')->nullable();         
            $table->foreign('idprofesor')->references('idprofesor')->on('profesor');   
            $table->unsignedInteger('idalumno')->nullable();         
            $table->foreign('idalumno')->references('idalumno')->on('alumnos');   
            $table->unsignedInteger('idcursos')->nullable();         
            $table->foreign('idcursos')->references('idcursos')->on('cursos');   
            
            $table->timestamps();
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
