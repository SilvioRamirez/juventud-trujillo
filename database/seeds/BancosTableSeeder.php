<?php

use Illuminate\Database\Seeder;
ini_set('max_execution_time', 9600);

use App\Banco;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class BancosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::filter('chunk')->load('public/data/bancos.xlsx')->chunk(500, function($results){
            foreach($results as $row){
                Banco::create([
                    'codigo'    => $row->codigo, 
                    'nombre'   => $row->nombre, 
                    'rif' => $row->rif
                ]);
            }
        });
    }
    
}
