<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Carreras extends Model
{
    protected $table    = 'carrera';
    protected $fillable = ['user_id', 'carrera', 'icono'];
}
