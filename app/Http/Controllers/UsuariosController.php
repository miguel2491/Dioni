<?php

namespace App\Http\Controllers;

use App;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class UsuariosController extends Controller
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
        return view('Catalogos/usuarios.index');
    }

    public function lista()
    {
        $results = DB::table('alumno as a')
            ->select('a.id', 'a.username as nombre', 'c.carrera', 'u.name')
            ->leftjoin('carrera as c', 'c.user_id', '=', 'a.id_carrera')
            ->leftjoin('users as u', 'u.id', '=', 'a.id_user')
            ->get();
        return response()->json(['data' => $results]);
    }
    public function store(Request $request)
    {

        $cat_materias                  = new Materias();
        $cat_materias->nombre          = request("materia");
        $cat_materias->id_cuatrimestre = request("cuatrimestre");
        $cat_materias->id_carrera      = request("carrera");
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
        $results = DB::table('alumno as a')
            ->select('a.id', 'a.id_carrera', 'a.id_user', 'a.username')
            ->where('a.id', $id)->get();
        return response()->json($results);
    }

    public function getAlumno($id)
    {
        $results = DB::table('alumno as a')
            ->select('a.id', 'a.id_carrera', 'a.id_user', 'a.username')
            ->where('a.id_user', $id)->get();
            return response()->json(['data' => $results]);    }

    public function getMaestro($id)
    {
        $results = DB::table('maestro as a')
            ->select('a.nombre', 'a.email', 'a.id_user', 'a.username')
            ->where('a.id_user', $id)->get();
            return response()->json(['data' => $results]);    }
    //Update
    public function update(Request $request, $id)
    {

        $cat_materias                  = Materias::findOrFail($id);
        $cat_materias->nombre          = request("materia");
        $cat_materias->id_cuatrimestre = request("cuatrimestre");
        $cat_materias->id_carrera      = request("carrera");
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
        $results = DB::table('users as u')
            ->select('u.id', 'u.name', 'u.email')
            ->get();
        return response()->json($results);
    }
}
