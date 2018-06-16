<?php

use Illuminate\Database\Seeder;
ini_set('max_execution_time', 9600);

use App\Municipio;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class MunicipiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::filter('chunk')->load('public/data/municipios_trujillo.xlsx')->chunk(500, function($results){
            foreach($results as $row){
                Municipio::create([
                    'id_municipio'    => $row->id_municipio, 
                    'id_estado'   => $row->id_estado, 
                    'municipio' => $row->municipio
                ]);
            }
        });
    }
}
