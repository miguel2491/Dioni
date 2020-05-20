<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Clases extends Model
{
    protected $table    = 'clase';
    protected $fillable = ['id', 'fecha', 'id_carrera', 'id_cuatrimestre'];
}
