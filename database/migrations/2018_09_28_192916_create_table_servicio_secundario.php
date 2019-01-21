<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableServicioSecundario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
            //
         Schema::create('servicio_secundario', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('created_by');
            $table->integer('id_bitacora');
            $table->integer('id_motivo');
            $table->integer('id_ubicacion_destino');
            $table->integer('id_prioridad');
            $table->text('observaciones');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('servicio_secundario');
    }
}
