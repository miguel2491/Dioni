<?php

namespace App\Http\Controllers\Maestro;

use App;
use App\Http\Controllers\Controller;
use App\Http\Requests\Maestro\MaestroRequest;
use App\Models\Maestro\Maestro;
use App\User;
use Auth;
use DB;
use Illuminate\Http\Request;

class MaestroController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
	/**
	 * Mostrar un listado de los recursos.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('Maestro/index');
    }
    
    public function asignatura() {
		return view('Maestro/asignatura');
    }
    
    public function asignatura_clase()
    {
        return view('Maestro/clase');
    }

}
