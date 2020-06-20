<?php

namespace App\Http\Controllers\Maestro;

use App;
use App\Http\Controllers\Controller;
use App\Models\Catalogos\Clases;
use App\Models\Maestro\Maestro;
use DB;
use Illuminate\Http\Request;

class MaestroController extends Controller
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
        return view('Maestro/index');
    }

    public function menu_profe()
    {
        return view('Maestro/menu');
    }

    public function asignatura()
    {
        return view('Maestro/asignatura');
    }

    public function asignatura_clase()
    {
        return view('Maestro/clase');
    }

    public function evalua_maestro_vista()
    {
        return view('Maestro/evaluacion');
    }

    public function cuestionario_maestro_vista()
    {
        return view('Maestro/cuestionario');
    }

    public function clase()
    {
        return view('Maestro/clase_');
    }

    public function clase_save(Request $request)
    {
        $cat_clase                  = new Clases();
        $cat_clase->clase           = request("clase");
        $cat_clase->id_materia      = request("materia");
        $cat_clase->id_maestro      = request("maestro");
        $cat_clase->id_cuatrimestre = request("cuatrimestre");
        $cat_clase->fecha           = request("fecha");
        $cat_clase->enlace          = request("enlace");
        $cat_clase->actividad       = request("actividad");
        DB::beginTransaction();
        try {
            if ($cat_clase->save()) {
                $id  = $cat_clase->id;
                $msg = ['status' => 'ok', 'message' => 'Se ha guardado correctamente', 'id' => $id];
            }
        } catch (\Illuminate\Database\QueryException $ex) {
            DB::rollback();
            $msg = ['status' => 'fail', 'message' => 'No se pudo guardar correctamente, por favor consulte con el administrador del sistema.', 'exception' => $ex->getMessage()];
            return response()->json($msg, 400);
        } catch (\Exception $ex) {
            DB::rollback();
            $msg = ['status' => 'fail', 'message' => 'No se pudo guardar correctamente, por favor consulte con el administrador del sistema.', 'exception' => $ex->getMessage()];
            return response()->json($msg, 400);
        } finally {
            DB::commit();
        }
        return response()->json($msg);
    }

}
