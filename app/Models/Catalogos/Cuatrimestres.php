<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Cuatrimestres extends Model {
	protected $table = 'cuatrimestres';
	protected $fillable = ['id_cuatri','cuatri'];
}