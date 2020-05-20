<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Cuatrimestres extends Model
{
    protected $table    = 'cuatrimestre';
    protected $fillable = ['id', 'lapso', 'fechainicio'];
}
