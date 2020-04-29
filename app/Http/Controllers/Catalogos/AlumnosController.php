<?php

namespace App\Http\Controllers\Catalogos;

use App;
use App\Http\Controllers\Controller;
use App\Http\Requests\Catalogos\AlumnoRequest;
use App\Models\Catalogos\Alumno;
use App\User;
use Auth;
use DB;
use Illuminate\Http\Request;

class AlumnosController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
	/**
	 * Mostrar un listado de los recursos.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('Catalogos/alumno.index');
	}

	public function listado() {
		$results = Alumno::get(['id', 'id_alumn', 'nombre', 'appat', 'appmat', 'cuatrimestre', 'carrera'])->all();
		return response()->json(['data' => $results]);
	}
}
