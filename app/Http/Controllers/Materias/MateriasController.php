<?php

namespace App\Http\Controllers\Materias;

use App;
use App\Http\Controllers\Controller;
use App\Http\Requests\Maestro\MateriasRequest;
use App\Models\Catalogos\Materias;
use App\Models\Catalogos\Cuatrimestres;
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
        switch ($id) {
            case 'DR00':
                $materia = "DERECHO";
                $icono = "derecho1.png";
                break;
            case 'ADE00':
                $materia = "ADMINISTRACIÓN";
                $icono = "administracion1.png";
            default:
                # code...
                break;
        }
        $cuatri = Cuatrimestres::select(
            'id',
            'lapso')
            ->get();
		return view('Materias/index')->with('materia', $materia)->with('icono', $icono)->with('cuatri',$cuatri)->with('id_materia',$id);
    }

    public function materia_clase($id,$idc)
    {
        $id_cuatri = $id;
        $id_carrera = $idc;
    	$cuatri = "";
    	//---------
        $cuatri = Cuatrimestres::select('lapso')
        ->where('id', $id_cuatri)
        ->get();
        $n_cuatri = $cuatri[0]->cuatri;
        //---------
        $materia = Materias::select(
            'no',
            'materia',
            'cuatrimestres.cuatri'
        )
        ->leftjoin('cuatrimestres', 'cuatrimestres.id_cuatri', '=', 'materias.id_cuatrimestre')
        ->where('materias.id_cuatrimestre',$id_cuatri)
        ->where('materias.id_carr',$id_carrera)
        ->get();

        return view('Materias/clase')->with('materia', $materia)->with('cuatrimestre',$n_cuatri);
    }
    
    

}
