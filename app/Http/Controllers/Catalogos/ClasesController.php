<?php

namespace App\Http\Controllers\Catalogos;

use App;
use App\Http\Controllers\Controller;
use App\Models\Catalogos\Clases;
use DB;
use Illuminate\Http\Request;

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
        $results = DB::table('clase as c')
            ->select('c.id', 'c.clase', 'c.id_cuatrimestre', 'c.id_carrera', 'ca.carrera', 'cu.lapso')
            ->leftjoin('cuatrimestre as cu', 'cu.id', '=', 'c.id_cuatrimestre')
            ->leftjoin('carrera as ca', 'ca.user_id', '=', 'c.id_carrera')
            ->get();
        return response()->json(['data' => $results]);
    }

    public function lista()
    {
        $results = DB::table('clase as c')
            ->select('c.id', 'c.clase', 'c.fecha', 'cu.lapso', 'ca.carrera')
            ->leftjoin('cuatrimestre as cu', 'c.id', '=', 'c.id_cuatrimestre')
            ->leftjoin('carrera as ca', 'ca.user_id', '=', 'c.id_carrera')
            ->get();
        return response()->json(['data' => $results]);
    }

    /*Guardar*/
    public function store(Request $request)
    {

        $cat_clase                  = new Clases();
        $cat_clase->fecha           = request("fecha");
        $cat_clase->clase           = request("clase");
        $cat_clase->id_carrera      = request("carrera");
        $cat_clase->id_cuatrimestre = request("cuatrimestre");
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
    public function edit($id)
    {
        $results = DB::table('clase as c')
            ->select('c.id', 'c.clase', 'c.id_carrera', 'c.id_cuatrimestre')
            ->where('c.id', $id)->get();
        return response()->json($results);
    }
    //Update
    public function update(Request $request, $id)
    {

        $cat_clase                  = Clases::findOrFail($id);
        $cat_clase->fecha           = request("fecha");
        $cat_clase->clase           = request("clase");
        $cat_clase->id_carrera      = request("carrera");
        $cat_clase->id_cuatrimestre = request("cuatrimestre");
        DB::beginTransaction();
        try {
            if ($cat_clase->save()) {
                $msg = ['status' => 'ok', 'message' => 'Se Actualizo correctamente'];
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
    public function destroy($id)
    {
        $msg       = [];
        $cat_clase = Clases::find($id);
        DB::beginTransaction();
        try {
            if ($cat_clase->delete()) {
                $msg = ['status' => 'ok', 'message' => 'Se elimino correctamente!'];
            }
        } catch (\Illuminate\Database\QueryException $ex) {
            DB::rollback();
            $msg = ['status' => 'fail', 'message' => 'No se pudo eliminar , por favor consulte con el administrador del sistema.', 'exception' => $ex->getMessage()];
            return response()->json($msg, 400);
        } catch (\Exception $e) {
            DB::rollback();
            $msg = ['status' => 'fail', 'message' => 'No se pudo eliminar, por favor consulte con el administrador del sistema.', 'exception' => $ex->getMessage()];
            return response()->json($msg, 400);
        } finally {
            DB::commit();
        }
        return response()->json($msg);
    }

    public function listado()
    {
        $results = DB::table('clase as c')
            ->select('c.id', 'c.clase', 'c.fecha', 'cu.lapso', 'ca.carrera')
            ->leftjoin('cuatrimestre as cu', 'ci.id', '=', 'c.id_cuatrimestre')
            ->leftjoin('carrera as ca', 'ca.user_id', '=', 'c.id_carrera')
            ->get();
        return response()->json($results);
    }
}
