<?php

namespace App\Http\Controllers\Catalogos;

use App;
use App\Http\Controllers\Controller;
use App\Http\Requests\Catalogos\CarrerasRequest;
use App\Models\Catalogos\Carreras;
use App\User;
use Auth;
use DB;
use Illuminate\Http\Request;

class CarrerasController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
	public function index() {
		return view('Catalogos/carreras.index');
	}
	/**
	 * Listado de todas los Bancos existentes.
	 */
	public function listado() {
		$results = Carreras::get(['id', 'id_carrera', 'Carrera', 'clave_sep'])->all();
		return response()->json(['data' => $results]);
	}
}
