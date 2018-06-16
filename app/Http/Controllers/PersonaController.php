<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\Rep;
use App\Banco;
use App\Municipio;
use App\Parroquia;
use App\Http\Requests\PersonaRequest;
use Endroid\QrCode\QrCode;

use Uuid;

class PersonaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cedula = $request->get('cedula');

        if($persona = Persona::where('cedula', '=', $cedula)->first()){

            $banco = Banco::pluck('nombre', 'codigo');
            return view('personas.show', compact('persona', 'banco'));

        }elseif ($persona = Rep::where('cedula', '=', $cedula)->first()){

            $banco = Banco::pluck('nombre', 'codigo');
            return view('personas.show', compact('persona', 'banco'));


        }else{
            $error='Cedula no encontrada.';
            return view('personas.error', compact('error', 'cedula'));
        }

        


        /*$personas = Persona::orderBy('id', 'DESC')
            ->cedula($cedula)
            ->paginate(4);
        return view('personas.index', compact('personas'));*/
    }

    public function searchPersona(){

        return view('personas.search');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonaRequest $request)
    {
        $cedula = $request->cedula;
        if($persona = Persona::where('cedula', '=', $cedula)->first()){
            $this->update($request);
        }
        $persona= new Persona();
        $persona->nombres       = $request->nombres;
        $persona->cedula        = $request->cedula;
        $persona->f_nacimiento  = $request->f_nacimiento;
        $persona->edad          = $request->edad;
        $persona->direccion     = $request->direccion;
        $persona->c_comunal     = $request->c_comunal;
        $persona->telefono_1    = $request->telefono_1;
        $persona->telefono_2    = $request->telefono_2;
        $persona->parroquia     = $request->parroquia;
        $persona->municipio     = $request->municipio;
        $persona->correo        = $request->correo;
        $persona->facebook      = $request->facebook;
        $persona->instagram     = $request->instagram;
        $persona->twitter       = $request->twitter;
        $persona->whatsapp      = $request->whatsapp;
        $persona->youtube       = $request->youtube;
        $persona->snapchat      = $request->snapchat;
        $persona->organizacion  = $request->organizacion;
        $persona->responsabilidad = $request->responsabilidad;
        $persona->estructura    = $request->estructura;
        $persona->centro_votacion = $request->centro_votacion;
        $persona->vocero_comunal  = $request->vocero_comunal;
        $persona->vocero_comunal_descripcion    = $request->vocero_comunal_descripcion;
        $persona->beneficiario_mision           = $request->beneficiario_mision;
        $persona->beneficiario_mision_descripcion   = $request->beneficiario_mision_descripcion;
        $persona->embarazo      = $request->embarazo;
        $persona->embarazo_semanas              = $request->embarazo_semanas;
        $persona->vivienda      = $request->vivienda;
        $persona->vivienda_tipo = $request->vivienda_tipo;
        $persona->deporte       = $request->deporte;
        $persona->actividad_extra   = $request->actividad_extra;
        $persona->enfermedad        = $request->enfermedad;
        $persona->campismo          = $request->campismo;
        $persona->cultura           = $request->cultura;
        $persona->cultura_descripcion   = $request->cultura_descripcion;
        $persona->grado_instruccion     = $request->grado_instruccion;
        $persona->liceo_universidad     = $request->liceo_universidad;
        $persona->carrera           = $request->carrera;
        $persona->trabajo           = $request->trabajo;
        $persona->lugar_trabajo     = $request->lugar_trabajo;
        $persona->ingreso_mensual     = $request->ingreso_mensual;
        $persona->votantes_centro   = $request->votantes_centro;
        $persona->votantes_centro_descripcion   = $request->votantes_centro_descripcion;
        $persona->conoce_centro                 = $request->conoce_centro;
        $persona->conoce_centro_descripcion     = $request->conoce_centro_descripcion;
        $persona->responsables_ubch             = $request->responsables_ubch;
        $persona->responsables_ubch_descripcion = $request->responsables_ubch_descripcion;
        $persona->entrenamiento_especial        = $request->entrenamiento_especial;
        $persona->entrenamiento_especial_descripcion = $request->entrenamiento_especial_descripcion;
        $persona->leer              = $request->leer;
        $persona->leer_descripcion  = $request->leer_descripcion;
        $persona->conoce_lineas     = $request->conoce_lineas;
        $persona->conoce_estructura = $request->conoce_estructura;
        $persona->recuerda_intervencion = $request->recuerda_intervencion;
        $persona->conoce_lineas_maduro  = $request->conoce_lineas_maduro;
        $persona->banco                 = $request->banco;
        $persona->cuenta                = $request->cuenta;
        $persona->cuenta_tipo           = $request->cuenta_tipo;
        $persona->imagen                = $request->imagen;
        $persona->uuid                  = Uuid::generate(5, $request->cedula , Uuid::NS_DNS);
        $persona->qrcode                = $request->qrcode;

        $persona->save();
        return back()->with('success', 'La información ha sido guardada.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersonaRequest $request)
    {  

        $cedula = $request->get('cedula');
        $persona = Persona::where('cedula', '=', $cedula)->first();
               
        $persona->nombres       = $request->nombres;
        $persona->cedula        = $request->cedula;
        $persona->f_nacimiento  = $request->f_nacimiento;
        $persona->edad          = $request->edad;
        $persona->direccion     = $request->direccion;
        $persona->c_comunal     = $request->c_comunal;
        $persona->telefono_1    = $request->telefono_1;
        $persona->telefono_2    = $request->telefono_2;
        $persona->parroquia     = $request->parroquia;
        $persona->municipio     = $request->municipio;
        $persona->correo        = $request->correo;
        $persona->facebook      = $request->facebook;
        $persona->instagram     = $request->instagram;
        $persona->twitter       = $request->twitter;
        $persona->whatsapp      = $request->whatsapp;
        $persona->youtube           = $request->youtube;
        $persona->snapchat      = $request->snapchat;
        $persona->organizacion   = $request->organizacion;
        $persona->responsabilidad   = $request->responsabilidad;
        $persona->estructura        = $request->estructura;
        $persona->centro_votacion  = $request->centro_votacion;
        $persona->vocero_comunal    = $request->vocero_comunal;
        $persona->vocero_comunal_descripcion        = $request->vocero_comunal_descripcion;
        $persona->beneficiario_mision               = $request->beneficiario_mision;
        $persona->beneficiario_mision_descripcion   = $request->beneficiario_mision_descripcion;
        $persona->embarazo      = $request->embarazo;
        $persona->embarazo_semanas      = $request->embarazo_semanas;
        $persona->vivienda      = $request->vivienda;
        $persona->vivienda_tipo = $request->vivienda_tipo;
        $persona->deporte       = $request->deporte;
        $persona->actividad_extra   = $request->actividad_extra;
        $persona->enfermedad        = $request->enfermedad;
        $persona->campismo          = $request->campismo;
        $persona->cultura           = $request->cultura;
        $persona->cultura_descripcion   = $request->cultura_descripcion;
        $persona->grado_instruccion     = $request->grado_instruccion;
        $persona->liceo_universidad     = $request->liceo_universidad;
        $persona->carrera           = $request->carrera;
        $persona->trabajo           = $request->trabajo;
        $persona->lugar_trabajo     = $request->lugar_trabajo;
        $persona->ingreso_mensual     = $request->ingreso_mensual;
        $persona->votantes_centro   = $request->votantes_centro;
        $persona->votantes_centro_descripcion   = $request->votantes_centro_descripcion;
        $persona->conoce_centro                 = $request->conoce_centro;
        $persona->conoce_centro_descripcion     = $request->conoce_centro_descripcion;
        $persona->responsables_ubch             = $request->responsables_ubch;
        $persona->responsables_ubch_descripcion = $request->responsables_ubch_descripcion;
        $persona->entrenamiento_especial        = $request->entrenamiento_especial;
        $persona->entrenamiento_especial_descripcion = $request->entrenamiento_especial_descripcion;
        $persona->leer              = $request->leer;
        $persona->leer_descripcion  = $request->leer_descripcion;
        $persona->conoce_lineas     = $request->conoce_lineas;
        $persona->conoce_estructura = $request->conoce_estructura;
        $persona->recuerda_intervencion = $request->recuerda_intervencion;
        $persona->conoce_lineas_maduro  = $request->conoce_lineas_maduro;
        $persona->banco                 = $request->banco;
        $persona->cuenta                = $request->cuenta;
        $persona->cuenta_tipo           = $request->cuenta_tipo;
        $persona->imagen                = $request->imagen;
        $persona->uuid                  = Uuid::generate(5, $request->cedula , Uuid::NS_DNS);
        $persona->qrcode                = $request->qrcode;

        $persona->save();

        //return view('personas.show', compact('persona')->with('success', 'La información ha sido guardada.'));
        return back()->with('success', 'La información ha sido guardada.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
