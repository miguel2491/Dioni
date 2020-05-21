<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
    protected $table    = 'materias';
    public $timestamps  = false;
    protected $fillable = ['id', 'nombre', 'id_cuatrimestre', 'id_carrera'];
}
