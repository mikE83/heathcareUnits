<?php

use Illuminate\Database\Seeder;
use Keboola\Csv\CsvFile;

class AntecedentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{
		$csv= new CsvFile(base_path().'/database/seeds/csv/CRUM-ANTECEDENTES.csv',',');
		foreach($csv AS $row) {
			$catmaster = new \App\CatMaster();
			$catmaster->create([
					'catalogo' => 'antecedentes',
					'etiqueta'=> $row[1],
					'activo' => 1,
					'valor' => $row[0]
			]);
		}
	}
}
