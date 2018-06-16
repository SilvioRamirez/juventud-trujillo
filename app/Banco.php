<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    protected $fillable = ['codigo', 'nombre', 'rif'];
}
