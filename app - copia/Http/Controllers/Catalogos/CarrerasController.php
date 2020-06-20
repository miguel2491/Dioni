<?php

namespace App\Http\Controllers\Catalogos;

use App;
use App\Http\Controllers\Controller;
use App\Models\Catalogos\Carreras;
use DB;
use Illuminate\Http\Request;

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
    /*Guardar*/
    public function store(Request $request)
    {

        $cat_carrera          = new Carreras();
        $cat_carrera->carrera = $request->Input("carrera");
        $cat_carrera->icono   = $request->Input("icono");
        DB::beginTransaction();
        try {
            if ($cat_carrera->save()) {
                $id  = $cat_carrera->id_carrera;
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

        $cat_carrera          = Carreras::findOrFail($id);
        $cat_carrera->carrera = request("carrera");
        $cat_carrera->icono   = request("icono");
        DB::beginTransaction();
        try {
            if ($cat_carrera->save()) {
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
        $msg         = [];
        $cat_carrera = Carreras::find($id);
        DB::beginTransaction();
        try {
            if ($cat_carrera->delete()) {
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
    public function listar_agenda($id)
    {
        $results = DB::table('agendas as a')
            ->select('a.id_agenda', 'a.id_cliente', 'a.id_washer', 'a.id_solicitud', 'a.fecha_agendada', 'a.status')
            ->where('a.id_washer', $id)
            ->get();
        return response()->json($results);
    }

    public function carreraAlumnoView($id_carrera)
    {
        $results = DB::table('carrera as c')
        ->select('c.user_id', 'c.carrera', 'c.icono')
        ->where('c.user_id', $id_carrera)->get();
        return view('Alumno/carreraView')->with('id', $id_carrera);
    }
}
