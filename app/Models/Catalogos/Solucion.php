<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Solucion extends Model
{
    protected $table      = 'solucion';
    public $timestamps    = false;
    protected $primaryKey = 'id_solucion';
    protected $fillable   = ['id_solucion', 'id_pregunta', 'respuesta', 'status', 'created_at'];
}
