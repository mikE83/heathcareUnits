<?php

use Illuminate\Database\Seeder;
use Keboola\Csv\CsvFile;

class TurnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$csv= new CsvFile(base_path().'/database/seeds/csv/CRUM-TURNO.csv',',');
    	foreach($csv AS $row) {
    		$catmaster = new \App\CatMaster();
    		$catmaster->create([
    				'catalogo' => 'turno',
    				'etiqueta'=> $row[1],
    				'activo' => 1,
    				'valor' => $row[0]
    		]);
    	}
    }
}
