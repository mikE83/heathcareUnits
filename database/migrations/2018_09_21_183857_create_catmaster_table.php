<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatmasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('catmaster', function (Blueprint $table) {

            //
            $table->increments('id');
            $table->string('catalogo');
            $table->string('etiqueta');
            $table->string('etiqueta_corto')->nullable();
            $table->tinyInteger('activo')->nullable();
            $table->integer('orden')->nullable();
            $table->integer('parent_id')->nullable();
            $table->string('valor')->nullable();
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
     Schema::dropIfExists('catmaster');
    }
}
