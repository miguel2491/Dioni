<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps  = false;
    protected $table    = 'users';
    protected $fillable = ['id', 'name', 'email', 'password', 'remember_token'];
}
