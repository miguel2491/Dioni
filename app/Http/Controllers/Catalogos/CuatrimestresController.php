<?php

namespace App\Http\Controllers\Catalogos;

use App;
use App\Http\Controllers\Controller;
use App\Models\Catalogos\Cuatrimestres;
use DB;
use Illuminate\Http\Request;

class CuatrimestresController extends Controller
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
        return view('Catalogos/cuatrimestres.index');
    }

    public function listado()
    {
        $results = Cuatrimestres::get(['id', 'lapso', 'fechainicio'])->all();
        return response()->json(['data' => $results]);
    }

    /*Guardar*/
    public function store(Request $request)
    {

        $cat_cuatrimestre              = new Cuatrimestres();
        $cat_cuatrimestre->lapso       = request("lapso");
        $cat_cuatrimestre->fechainicio = request("fechainicio");
        DB::beginTransaction();
        try {
            if ($cat_cuatrimestre->save()) {
                $id  = $cat_cuatrimestre->id_carrera;
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
        $results = DB::table('carrera as c')
            ->select('c.user_id', 'c.carrera', 'c.icono')
            ->where('c.user_id', $id)->get();
        return response()->json($results);
    }
    //Update
    public function update(Request $request, $id)
    {

        $cat_cuatrimestre              = Cuatrimestres::findOrFail($id);
        $cat_cuatrimestre->lapso       = request("lapso");
        $cat_cuatrimestre->fechainicio = request("fechainicio");
        DB::beginTransaction();
        try {
            if ($cat_cuatrimestre->save()) {
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
        $msg              = [];
        $cat_cuatrimestre = Cuatrimestres::find($id);
        DB::beginTransaction();
        try {
            if ($cat_cuatrimestre->delete()) {
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
}
