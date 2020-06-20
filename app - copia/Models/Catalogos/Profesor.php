<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table    = 'maestro';
    public $timestamps  = false;
    protected $fillable = ['id', 'id_user', 'username', 'nombre', 'email'];
}
