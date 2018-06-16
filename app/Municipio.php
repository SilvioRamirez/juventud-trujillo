<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $fillable = ['id_municipio', 'id_estado', 'municipio'];
}
