<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familiar extends Model
{
    protected $fillable = [
        'cedula_persona', 'nombres', 'cedula', 'edad', 'parentezco', 'instruccion', 'municipio','parroquia','direccion','centro_votacion','beneficiario_mision',
    ];
}
