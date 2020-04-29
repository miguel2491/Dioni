<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Materias extends Model {
	protected $table = 'materias';
	protected $fillable = ['no','id_carr','carrera','id_mat','materia','abre_mat','id_unico_mat','id_cuatrimestre','cuatrimestre'];
}