<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombres'                   => 'required|string|max:255',
            'cedula'                    => 'required|string|min:5|max:15',
            'f_nacimiento'              => 'required|max:20',
            'edad'                      => 'required|integer',
            'direccion'                 => 'required|string|min:5|max:255',
            'c_comunal'                 => 'required|string|max:255',
            'telefono_1'                => 'required|string|max:12|min:12',
            'parroquia'                 => 'required|string|max:255',
            'municipio'                 => 'required|string|max:255',
            'correo'                    => 'required|email',
            'responsabilidad'           => 'required|string|max:255',
            'estructura'                => 'required|string|max:255',
            'vocero_comunal'            => 'required|string|max:255',
            'embarazo'                  => 'required|string|max:255',
            'vivienda'                  => 'required|string|max:255',
            'deporte'                   => 'required|string|max:255',
            'actividad_extra'           => 'required|string|max:255',
            'campismo'                  => 'required|string|max:255',
            'cultura'                   => 'required|string|max:255',
            'grado_instruccion'         => 'required|string|max:255',
            'votantes_centro'           => 'required|string|max:255',
            'conoce_centro'             => 'required|string|max:255',
            'responsables_ubch'         => 'required|string|max:255',
            'entrenamiento_especial'    => 'required|string|max:255',
            'leer'                      => 'required|string|max:255',
            'conoce_lineas'             => 'required|string|max:255',
            'conoce_estructura'         => 'required|string|max:255',
            'recuerda_intervencion'     => 'required|string|max:255',
            'imagen'                    => 'required'
        ];
    }
}
