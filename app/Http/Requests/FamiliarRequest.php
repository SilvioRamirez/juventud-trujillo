<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FamiliarRequest extends FormRequest
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
            'nombres'               => 'required|string|max:255',
            'cedula'                => 'required|string|min:5|max:15',
            'edad'                  => 'required',
            'parentezco'            => 'required|string|',
            'municipio'             => 'required|string|max:255',
            'parroquia'             => 'required|string|max:255',
            'direccion'             => 'required|string|max:255',
        ];
    }
}
