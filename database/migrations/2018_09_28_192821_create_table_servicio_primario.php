<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableServicioPrimario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('servicio_primario', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('created_by');
            $table->integer('id_bitacora');
            $table->integer('id_motivo');
            $table->integer('id_domicilio');
            $table->string('nombre_solictante');
            $table->string('apaterno_solictante');
            $table->string('amterno_solictante');
            $table->integer('id_status');
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
        Schema::dropIfExists('servicio_primario');
    }
}
