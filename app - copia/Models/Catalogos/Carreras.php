<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Carreras extends Model
{
    public $timestamps    = false;
    protected $primaryKey = 'user_id';
    protected $table      = 'carrera';
    protected $fillable   = ['user_id', 'carrera', 'icono'];
}
