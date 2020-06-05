<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Clases extends Model
{
    protected $table    = 'clase';
    public $timestamps  = false;
    protected $fillable = ['id', 'clase', 'fecha', 'id_carrera', 'id_materia', 'id_cuatrimestre', 'enlace', 'actividad', 'id_maestro'];
}
