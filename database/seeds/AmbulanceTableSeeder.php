<?php

use Illuminate\Database\Seeder;
use App\Ambulance;
use Keboola\Csv\CsvFile;

class AmbulanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      $csv= new CsvFile(base_path().'/database/seeds/csv/ambulances.csv');
      foreach($csv AS $row) {
    	$ambulance= new Ambulance;
       $ubicacion->create(['nombre' => $row[0], 'clues' => $row[1], 'cve_ohmpi'=> $row[2], 'activo' => 0, 'dependencia'=>$row[3] ,'activo'=>1, 'nombre_corto'=>$row[4] ]);
        }
    }
}
