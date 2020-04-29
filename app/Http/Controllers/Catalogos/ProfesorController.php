<?php

namespace App\Http\Controllers\Catalogos;

use Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Catalogos\ProfesorRequest;
use App\Models\Catalogos\Profesor;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfesorController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
	public function index() {
		return view('Catalogos/profesor.index');
	}

	public function lista() {
    	$results = Profesor::get(['id_profre', 'Nombre', 'Appat', 'apmat', 'estudios'])->all();
		return response()->json(['data' => $results]);
	}
}
