<?php

namespace App\Http\Controllers\Catalogos;

use App;
use App\Http\Controllers\Controller;
use App\Models\Catalogos\Materias;
use DB;
use Illuminate\Http\Request;

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
        //$results = Materias::get(['id', 'nombre', 'id_cuatrimestre', 'id_carrera'])->all();
        $results = DB::table('materias as m')
            ->select('m.id', 'm.nombre', 'm.id_cuatrimestre', 'm.id_carrera', 'c.lapso', 'ca.carrera')
            ->leftjoin('cuatrimestre as c', 'c.id', '=', 'm.id_cuatrimestre')
            ->leftjoin('carrera as ca', 'ca.user_id', '=', 'm.id_carrera')
            ->get();
        return response()->json(['data' => $results]);
    }

    public function store(Request $request)
    {

        $cat_materias                  = new Materias();
        $cat_materias->nombre          = request("materia");
        $cat_materias->id_cuatrimestre = request("cuatrimestre");
        $cat_materias->id_carrera      = request("carrera");
        $cat_materias->id_maestro      = request("maestro");
        DB::beginTransaction();
        try {
            if ($cat_materias->save()) {
                $id  = $cat_materias->id_carrera;
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
        $results = DB::table('materias as m')
            ->select('m.id', 'm.nombre', 'm.id_cuatrimestre', 'm.id_carrera', 'm.id_maestro')
            ->where('m.id', $id)->get();
        return response()->json($results);
    }
    //Update
    public function update(Request $request, $id)
    {

        $cat_materias                  = Materias::findOrFail($id);
        $cat_materias->nombre          = request("materia");
        $cat_materias->id_cuatrimestre = request("cuatrimestre");
        $cat_materias->id_carrera      = request("carrera");
        $cat_materias->id_maestro      = request("maestro");
        DB::beginTransaction();
        try {
            if ($cat_materias->save()) {
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
        $msg          = [];
        $cat_materias = Materias::find($id);
        DB::beginTransaction();
        try {
            if ($cat_materias->delete()) {
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
    //LISTAR
    public function listado()
    {
        $results = DB::table('materias as m')
            ->select('m.id', 'm.nombre', 'm.id_cuatrimestre', 'm.id_carrera', 'm.id_maestro', 'c.lapso', 'ca.carrera')
            ->leftjoin('cuatrimestre as c', 'c.id', '=', 'm.id_cuatrimestre')
            ->leftjoin('carrera as ca', 'ca.user_id', '=', 'm.id_carrera')
            ->get();
        return response()->json($results);
    }
    //Catera Materia Alumno
    public function lista_materia_alumno($id)
    {
        $results = DB::table('catera_materias_alumno as cma')
            ->select('cma.id', 'cma.id_alumno', 'cma.id_materia', 'm.id_cuatrimestre', 'cma.calificacionfinal')
            ->where('cma.id', $id)
            ->get();
        return response()->json($results);
    }
}
