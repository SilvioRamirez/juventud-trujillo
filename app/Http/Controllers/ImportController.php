<?php

namespace App\Http\Controllers;
ini_set('max_execution_time', 9600);

use App\Rep;
use App\RepsImport;
use App\Banco;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function importReps()
    {
    	Excel::filter('chunk')->load('data/data.csv')->chunk(500, function($results){
    		foreach($results as $row){
    			Rep::create([
    				'cedula' 	=> $row->cedula, 
    				'nombres' 	=> $row->nombres, 
    				'centro_votacion' => $row->centro_votacion, 
    				'edad' 		=> $row->edad, 
    				'parroquia' => $row->parroquia, 
    				'municipio' => $row->municipio
    			]);
    		}
    	});

    	return 'hecho';
    }

    public function importBancos()
    {
        Excel::filter('chunk')->load('data/bancos.xlsx')->chunk(500, function($results){
            foreach($results as $row){
                Banco::create([
                    'codigo'    => $row->codigo, 
                    'nombre'   => $row->nombre, 
                    'rif' => $row->rif
                ]);
            }
        });

        return 'Todos los bancos han sido importados';
    }

}
