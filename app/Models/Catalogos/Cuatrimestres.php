<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Cuatrimestres extends Model
{
    protected $table    = 'cuatrimestre';
    public $timestamps  = false;
    protected $fillable = ['id', 'lapso', 'fechainicio'];
}
