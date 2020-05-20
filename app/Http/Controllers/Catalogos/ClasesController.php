<?php

namespace App\Http\Controllers\Catalogos;

use App;
use App\Http\Controllers\Controller;
use App\Models\Catalogos\Clases;
use App\Models\Catalogos\ClasesAsignadas;

class ClasesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Mostrar un listado de los recursos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Catalogos/clases.index');
    }

    public function asignadas()
    {
        return view('Catalogos/clases.asignadas');
    }

    public function lista_asignadas()
    {
        $results = ClasesAsignadas::get(['id_clase_asignada', 'id_carrera', 'id_unico_mat', 'descripcion_tarea', 'fecha', 'name_alumn'])->all();
        return response()->json(['data' => $results]);
    }

    public function lista()
    {
        /*$lista = Clases::leftjoin('materias', 'id_unico_mat', '=', 'materias.id_unico_mat')
        ->leftjoin('carrera', 'id_carrera', '=', 'carrera.id_carrera')
        ->leftjoin('cuatrimestres', 'id_cuatri', '=', 'cuatrimestres.id_cuatri')
        ->get([
        'clase.id_clase',
        'clase.fecha',
        DB::raw('materias.materia AS materia'),
        DB::raw('carrera.Carrera AS carrera'),
        DB::raw('cuatrimestres.cuatri AS cuatri')
        ]);
        return response()->json(['data' => $lista]);*/
        $results = Clases::get(['id', 'fecha', 'id_carrera as carrera', 'id_cuatrimestre as cuatri'])->all();
        return response()->json(['data' => $results]);
    }
}
