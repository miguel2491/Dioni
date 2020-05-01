<?php

namespace App\Http\Controllers\Materias;

use App;
use App\Http\Controllers\Controller;
use App\Http\Requests\Maestro\MateriasRequest;
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
		return view('Maestro/index');
    }
    
    public function materia($id) {
    	$materia = "";
    	$icono = "";
    	if($id == "1" || $id == 1){
    		$materia = "DERECHO";
    		$icono = "derecho1.png";
    	}else{
    		$materia = "ADMINISTRACIÓN";
    		$icono = "administracion1.png";
    	}
		return view('Materias/index')->with('materia', $materia)->with('icono', $icono);
    }

    public function materia_clase($id)
    {
    	$cuatri = "";
    	if($id == "1" || $id == 1){
    		$cuatri = "I CUATRIMESTRE";
    	}else{
    		$cuatri = "II CUATRIMESTRE";
    	}
    	return view('Materias/clase')->with('cuatri', $cuatri);
    }
    
    

}
