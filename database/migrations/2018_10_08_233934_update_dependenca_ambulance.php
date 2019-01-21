<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDependencaAmbulance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('ambulance', function ($table) {
    		//$table->renameColumn('id_dependencia', 'id_institucion');
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	/*Schema::table('ambulance', function ($table) {
    		$table->renameColumn('id_institucion', 'id_dependencia');
    	});*/
    }
}
