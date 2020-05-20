<?php

namespace App\Http\Controllers\Catalogos;

use App;
use App\Http\Controllers\Controller;
use App\Models\Catalogos\Materias;

class MateriasController extends Controller
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
        return view('Catalogos/materias.index');
    }

    public function listar()
    {
        $results = Materias::get(['id', 'nombre', 'id_cuatrimestre', 'id_carrera'])->all();
        return response()->json(['data' => $results]);
    }
}
