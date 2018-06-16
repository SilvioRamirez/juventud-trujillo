<?php

use Illuminate\Database\Seeder;
ini_set('max_execution_time', 9600);

use App\Parroquia;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ParroquiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::filter('chunk')->load('public/data/parroquias_trujillo.xlsx')->chunk(500, function($results){
            foreach($results as $row){
                Parroquia::create([
                    'id_parroquia'    => $row->id_parroquia, 
                    'id_municipio'   => $row->id_municipio, 
                    'parroquia' => $row->parroquia
                ]);
            }
        });
    }
}
