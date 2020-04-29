<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Carreras extends Model {
	protected $table = 'carrera';
	protected $fillable = ['id', 'id_carrera', 'Carrera', 'clave_sep'];
}