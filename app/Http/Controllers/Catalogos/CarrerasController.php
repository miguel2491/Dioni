<?php

namespace App\Http\Controllers\Catalogos;

use App;
use App\Http\Controllers\Controller;
use App\Models\Catalogos\Carreras;

class CarrerasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('Catalogos/carreras.index');
    }
    /**
     * Listado de todas los Bancos existentes.
     */
    public function listado()
    {
        $results = Carreras::get(['user_id', 'carrera', 'icono'])->all();
        return response()->json(['data' => $results]);
    }
}
