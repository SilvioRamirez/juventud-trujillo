<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Municipio;
use App\Parroquia;
use App\Rep;

class RepController extends Controller
{
    public function create()
    {
    	$municipios = Municipio::pluck('municipio', 'municipio');
    	$parroquias = Parroquia::pluck('parroquia', 'parroquia');
    	return view('reps.create', compact('municipios', 'parroquias'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [            
            'cedula'    		=> 'required|unique:reps',
            'nombres'   		=> 'required',
            'centro_votacion'  	=> 'required',
            'edad' 				=> 'required',
            'parroquia' 		=> 'required',
            'municipio'  		=> 'required',
        ]);        

        Rep::create([
            'cedula'      		=> $request->cedula,
            'nombres'    		=> $request->nombres,
            'centro_votacion'  	=> $request->centro_votacion,
            'edad'  			=> $request->edad,
            'parroquia'     	=> $request->parroquia,
            'municipio'  		=> $request->municipio
        ]);

        return back()->with('success', 'Se han registrado los datos de '.$request->nombres.'.');
    }
}
