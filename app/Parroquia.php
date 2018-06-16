<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    protected $fillable = ['id_parroquia', 'id_municipio', 'parroquia'];
}
