<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Cuestionario extends Model
{
    protected $table      = 'cuestionario';
    public $timestamps    = false;
    protected $primaryKey = 'id_cuestionario';
    protected $fillable   = ['id_cuestionario', 'id_pregunta', 'id_respuesta', 'id_alumno', 'id_evaluacion', 'status', 'created_at'];
}
