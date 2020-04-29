<?php

namespace App\Http\Controllers\Catalogos;

use App;
use App\Http\Controllers\Controller;
use App\Http\Requests\Catalogos\MateriasRequest;
use App\Models\Catalogos\Materias;
use App\User;
use Auth;
use DB;
use Illuminate\Http\Request;

class MateriasController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
	/**
	 * Mostrar un listado de los recursos.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('Catalogos/materias.index');
	}

	public function listar() {
		$results = Materias::get(['no','id_carr','carrera','id_mat','materia','abre_mat','id_unico_mat','id_cuatrimestre','cuatrimestre'])->all();
		return response()->json(['data' => $results]);
	}
}
