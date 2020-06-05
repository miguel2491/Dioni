<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Anexos extends Model
{
    protected $table    = 'anexos';
    public $timestamps  = false;
    protected $fillable = ['id', 'id_clase', 'tipo', 'link'];
}
