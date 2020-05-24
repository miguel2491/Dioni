<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table    = 'alumno';
    public $timestamps  = false;
    protected $fillable = ['id', 'id_carrera', 'id_user', 'username'];
}
