<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Incidencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencias', function (Blueprint $table) {
            $table->id('idIncidencia');
            $table->bigInteger('idUsuario')->unsigned();
            $table->string('titulo');
            $table->string('descripcion');
            $table->bigInteger('aula')->unsigned();            
            $table->date('fechaCreacion');
            $table->date('fechaModificacion')->unique();
            $table->date('fechaCierre');
            $table->enum('estado', ['nuevo', 'procesado', 'resuleto', 'nuevaIncidencia']);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('idUsuario')->references('idUsuario')->on('users')->onDelete('cascade');
            $table->foreign('aula')->references('aula')->on('aulas');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidencias');
    }
}