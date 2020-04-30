<?php

namespace App\Http\Controllers\Catalogos;

use App;
use App\Http\Controllers\Controller;
use App\Http\Requests\Catalogos\CuatrimestreRequest;
use App\Models\Catalogos\Cuatrimestres;
use App\User;
use Auth;
use DB;
use Illuminate\Http\Request;

class CuatrimestresController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
	/**
	 * Mostrar un listado de los recursos.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('Catalogos/cuatrimestres.index');
	}

	public function listado() {
		/*$cuenta = Cuatrimestre::leftjoin('users', 'id_usuario', '=', 'users.id')
			->get([
				'cuentas.id',
				DB::raw('users.name AS usuario'),
				'cuentas.saldo_total',
				'cuentas.saldo_disponible',
				'cuentas.saldo_gasto',
			]);
		return response()->json(['data' => $cuenta]);*/
		$results = Cuatrimestres::get(['id_cuatri','cuatri'])->all();
		return response()->json(['data' => $results]);
	}
}