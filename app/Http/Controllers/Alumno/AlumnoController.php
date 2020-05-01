<?php

namespace App\Http\Controllers\Alumno;

use App;
use App\Http\Controllers\Controller;
//use App\Http\Requests\Alumno\AlumnoRequest;
//use App\Models\Alumno\Alumno;
use App\User;
use Auth;
use DB;
use Illuminate\Http\Request;

class AlumnoController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
	/**
	 * Mostrar un listado de los recursos.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('Alumno/index');
	}

	public function clase_vista(){
		return view('Alumno/clase');
	}

	public function cuestionario_alumno_vista()
	{
		return view('Alumno/cuestionario');
	}

}
