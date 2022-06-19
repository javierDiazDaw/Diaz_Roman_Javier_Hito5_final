<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comentarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id('idComentario');
            $table->bigInteger('idIncidencia')->unsigned();
            $table->string('comentario');
            $table->date('fechaComentario');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('idIncidencia')->references('idIncidencia')->on('incidencias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}
