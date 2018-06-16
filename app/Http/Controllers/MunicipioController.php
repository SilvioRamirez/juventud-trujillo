<?php

namespace App\Http\Controllers;
use App\Municipio;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    public function getMunicipios(){
    	$municipios = Municipio::all();
    	return $municipios;
    }
}
