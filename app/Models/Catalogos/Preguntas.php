<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    protected $table      = 'preguntas';
    public $timestamps    = false;
    protected $primaryKey = 'id_preguntas';
    protected $fillable   = ['id_preguntas', 'id_evaluacion', 'nombre_pregunta'];
}
