<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RolesUser extends Model {
	public $timestamps = false;
	protected $table = 'role_user';
	protected $fillable = ['idRolUser', 'rol_id','user_id'];
}