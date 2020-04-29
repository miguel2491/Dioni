<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Clases extends Model {
	protected $table = 'clase';
	protected $fillable = ['id_clase','fecha','id_unico_mat','id_carrera','id_cuatri','llave_clase'];
}