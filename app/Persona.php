<?php

namespace App;
use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use ShinobiTrait;
    ////Scope
	/*public function scopeNombres($query, $nombres)
	{
		if($nombres)
			return $query->orWhere('nombres', 'LIKE', "%nombres%");

	}

	public function scopeApellidos($query, $apellidos)
	{
		if($apellidos)
			return $query->orWhere('apellidos', 'LIKE', "%apellidos%");

	}*/

	public function scopeCedula($query, $cedula)
	{
		if($cedula)
			return $query->where('cedula', 'LIKE', "%$cedula%");

	}
}

