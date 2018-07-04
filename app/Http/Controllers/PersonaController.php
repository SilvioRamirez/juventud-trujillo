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
use Yajra\Datatables\Datatables;

use Uuid;

class PersonaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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
    }

    public function list()
    {
        return view('personas.list');
    }

    public function listData()
    {        

        $personas = Persona::select(['id','nombres','cedula','telefono_1','telefono_2','municipio', 'parroquia', 'created_at'])->orderBy('created_at', 'DESC');

        return Datatables::of($personas)->make(true);
    }

    public function searchPersona(){
        return view('personas.search');
    }

    public function create()
    {
        $municipios = Municipio::pluck('municipio', 'municipio');
        return view('personas.create', compact('municipios'));
    }
    
    public function store(PersonaRequest $request)
    {
        $cedula = $request->cedula;
        if($persona = Persona::where('cedula', '=', $cedula)->first()){
            $this->update($request);
            return back()->with('success', 'La información de '.$persona->nombres.' ha sido actualizada.');
        }else{
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
            $persona->ocupacion         = $request->ocupacion;
            $persona->potencialidad     = $request->potencialidad;
            $persona->terreno           = $request->terreno;
            $persona->terreno_cantidad  = $request->terreno_cantidad;
            $persona->terreno_medida    = $request->terreno_medida;
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
            return back()->with('success', 'Se han registrado los datos de '.$persona->nombres.'.');

            //archivo modificado
        }
    }

    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        //
    }

    
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
        $persona->youtube       = $request->youtube;
        $persona->snapchat      = $request->snapchat;
        $persona->organizacion   = $request->organizacion;
        $persona->responsabilidad   = $request->responsabilidad;
        $persona->estructura        = $request->estructura;
        $persona->centro_votacion   = $request->centro_votacion;
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
        $persona->ingreso_mensual   = $request->ingreso_mensual;
        $persona->ocupacion         = $request->ocupacion;
        $persona->potencialidad     = $request->potencialidad;
        $persona->terreno           = $request->terreno;
        $persona->terreno_cantidad           = $request->terreno_cantidad;
        $persona->terreno_medida           = $request->terreno_medida;
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
        return back()->with('success', 'La información de '.$persona->nombres.' ha sido Actualizada.');
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
