<?php

namespace App\Http\Controllers\Catalogos;

use App;
use App\Http\Controllers\Controller;
use App\Models\Catalogos\Alumno;

class AlumnosController extends Controller
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
        return view('Catalogos/alumno.index');
    }

    public function listado()
    {
        $results = Alumno::get(['id', 'id_carrera', 'id_user', 'username'])->all();
        return response()->json(['data' => $results]);
    }
}
