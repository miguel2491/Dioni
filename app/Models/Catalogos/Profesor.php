<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model {
	protected $table = 'profe';
	protected $fillable = ['id_profre', 'Nombre', 'Appat', 'apmat', 'estudios'];
}