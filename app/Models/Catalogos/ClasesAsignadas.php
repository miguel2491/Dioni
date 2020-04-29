<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class ClasesAsignadas extends Model {
	protected $table = 'clases_asig';
	protected $fillable = ['id_clase_asignada','id_carrera','id_unico_mat','descripcion_tarea','link_video1','link_video2','video','anexo1','anexo2','nom_anexo1','nom_anexo2','fecha','llave_clase','name_alumn'];
}