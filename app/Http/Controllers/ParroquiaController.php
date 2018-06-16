<?php

namespace App\Http\Controllers;
use App\Parroquia;

use Illuminate\Http\Request;

class ParroquiaController extends Controller
{
    public function getParroquias($id_municipio){
    	$parroquias = Parroquia::where('id_municipio', '=',$id_municipio)->get();
    	return $parroquias;
    }

}
