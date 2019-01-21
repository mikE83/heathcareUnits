<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBitacoraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacora', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('created_by');
            $table->date('fecha');
            $table->time('inicio');
            $table->integer('id_unidad');
            $table->integer('id_operador');
            $table->integer('id_medico');
            $table->integer('id_motivo');
            $table->text('observaciones');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bitacora');
    }
}
