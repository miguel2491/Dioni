<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class CatMatAlu extends Model
{
    protected $table    = 'catera_materias_alumno';
    public $timestamps  = false;
    protected $fillable = ['id', 'id_alumno', 'id_materia', 'id_cuatrimestre', 'calificacionfinal', 'aprobado'];
}
