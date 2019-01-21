<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTraslados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
            Schema::create('traslado', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('created_by');
            $table->integer('id_bitacora');
            $table->integer('id_ubicacion');
            $table->boolean('es_puente');
            $table->text('observaciones');
            $table->time('arribo');
            $table->time('salida');
            $table->time('termino');
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
        Schema::dropIfExists('traslado');
    }
}
