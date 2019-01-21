<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(LoadUsersTable::class);
    	$this->call(AntecedentesSeeder::class);
    	$this->call(CancelaSeeder::class);
    	$this->call(ClvedadSeeder::class);
    	$this->call(ComunicacionSeeder::class);
    	$this->call(ConcienteSeeder::class);
    	$this->call(DerechohabienciaSeeder::class);
    }
}
