<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model {
	protected $table = 'alumnos1';
	protected $fillable = ['id', 'id_alumn','nombre', 'appat', 'appmat', 'cuatrimestre', 'carrera'];
}