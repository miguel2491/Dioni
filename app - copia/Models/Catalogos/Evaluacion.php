<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $table      = 'evaluacion';
    public $timestamps    = false;
    protected $primaryKey = 'id_evaluacion';
    protected $fillable   = ['id_evaluacion', 'id_profesor', 'nombre_evaluacion', 'status', 'created_at'];
}
