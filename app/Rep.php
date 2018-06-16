<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rep extends Model
{
    protected $fillable = ['cedula', 'nombres', 'centro_votacion', 'edad', 'parroquia', 'municipio'];
}
