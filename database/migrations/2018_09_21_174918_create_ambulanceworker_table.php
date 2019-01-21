<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmbulanceworkerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambulanceworker', function (Blueprint $table) {
        //tabla de trabajadores de ambulancia
            $table->increments('id');
            $table->string('nombre');
            $table->string('apaterno');
            $table->string('amaterno');
            $table->string('cedula');
            $table->integer('id_tipo_operador');
            $table->softDeletes();
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
          Schema::dropIfExists('ambulanceworker');
    }
}
