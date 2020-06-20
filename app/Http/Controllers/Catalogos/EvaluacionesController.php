<?php

namespace App\Http\Controllers\Catalogos;

use App;
use App\Http\Controllers\Controller;
use App\Models\Catalogos\Cuestionario;
use App\Models\Catalogos\Evaluacion;
use App\Models\Catalogos\Preguntas;
use App\Models\Catalogos\Solucion;
use DB;
use Illuminate\Http\Request;

class EvaluacionesController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    /**
     * Mostrar un listado de los recursos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('Catalogos/alumno.index');
        //return "HOLA";
    }
    public function con_eva_profe($id)
    {
        $evaluacion = DB::table('evaluacion')->where('id_profesor', $id)->first();
        if ($evaluacion) {
            $id     = $evaluacion->id_evaluacion;
            $titulo = $evaluacion->nombre_evaluacion;
            $msg    = ['status' => 'ok', 'message' => 'Si existe evaluacion del profe', 'id_evaluacion' => $id, 'titulo' => $titulo];
        } else {
            $msg = ['status' => 'ok', 'message' => 'Sin Registro de evaluación', 'id_evaluacion' => 0];
        }
        return response()->json($msg);
    }

    public function con_eva_ind(Request $request)
    {
        $id_evaluacion = request("id_evaluacion");
        $id_profesor = request("id_profesor");
        $evaluacion = DB::table('evaluacion')->where('id_profesor', $id_profesor)->where('id_evaluacion', $id_evaluacion)->get();
        return response()->json($evaluacion);
    }

    public function evaluacion_profe($id)
    {
        $results = DB::table('evaluacion')->where('id_profesor', $id)->get();
        return response()->json($results);
    }

    //Evaluaciones
    public function store(Request $request)
    {
        $cat_evaluacion                    = new Evaluacion();
        $cat_evaluacion->nombre_evaluacion = request("nombre_e");
        $cat_evaluacion->id_profesor       = request("id_profesor");
        DB::beginTransaction();
        try {
            if ($cat_evaluacion->save()) {
                $id  = $cat_evaluacion->id_evaluacion;
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

    public function update(Request $request, $id)
    {
        $cat_evaluacion         = Evaluacion::findOrFail($id);
        $cat_evaluacion->nombre = request("nombre_e");
        $cat_evaluacion->precio = request("id_profesor");
        DB::beginTransaction();
        try {
            if ($cat_evaluacion->save()) {
                $msg = ['status' => 'ok', 'message' => 'Se ha guardado correctamente'];
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
        $msg            = [];
        $cat_evaluacion = Evaluacion::find($id);
        DB::beginTransaction();
        try {
            if ($cat_evaluacion->delete()) {
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

        $results = DB::table('evaluacion as ev')
            ->select('ev.id_profesor', 'ev.nombre_evaluacion')
            ->get();

        return response()->json($results);
    }

    //Preguntas
    public function store_pregunta(Request $request)
    {
        $cat_pregunta                  = new Preguntas();
        $cat_pregunta->id_evaluacion   = request("id_evaluacion");
        $cat_pregunta->nombre_pregunta = request("nombre_pregunta");
        DB::beginTransaction();
        try {
            if ($cat_pregunta->save()) {
                $id  = $cat_pregunta->id_preguntas;
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
    public function update_pregunta(Request $request, $id)
    {
        $cat_pregunta                  = Preguntas::findOrFail($id);
        $cat_pregunta->id_evaluacion   = request("id_evaluacion");
        $cat_pregunta->nombre_pregunta = request("nombre_pregunta");
        DB::beginTransaction();
        try {
            if ($cat_pregunta->save()) {
                $msg = ['status' => 'ok', 'message' => 'Se ha guardado correctamente'];
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
    public function destroy_pregunta($id)
    {
        $msg          = [];
        $cat_pregunta = Preguntas::find($id);
        DB::beginTransaction();
        try {
            if ($cat_pregunta->delete()) {
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
    public function evaluacion_preguntas($id)
    {
        $res = DB::table('preguntas as pre')
            ->select(
                'pre.id_preguntas',
                'pre.nombre_pregunta',
                'ev.nombre_evaluacion'
            )
            ->leftjoin('evaluacion as ev', 'ev.id_evaluacion', '=', 'pre.id_evaluacion')
            ->where('ev.id_evaluacion', $id)
            ->get();
        return response()->json($res);
    }
    //Respuestas
    public function store_respuesta(Request $request)
    {
        $cat_solucion              = new Solucion();
        $cat_solucion->id_pregunta = request("id_pregunta");
        $cat_solucion->respuesta   = request("respuesta");
        DB::beginTransaction();
        try {
            if ($cat_solucion->save()) {
                $id  = $cat_solucion->id_solucion;
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
    public function update_respuesta(Request $request, $id)
    {
        $cat_respuesta              = Solucion::findOrFail($id);
        $cat_respuesta->id_pregunta = request("id_pregunta");
        $cat_respuesta->respuesta   = request("respuesta");
        DB::beginTransaction();
        try {
            if ($cat_respuesta->save()) {
                $msg = ['status' => 'ok', 'message' => 'Se ha guardado correctamente'];
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

    public function destroy_respuesta($id)
    {
        $msg           = [];
        $cat_respuesta = Solucion::find($id);
        DB::beginTransaction();
        try {
            if ($cat_respuesta->delete()) {
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
    public function evaluacion_respuestas($id)
    {
        $res = DB::table('solucion as sol')
            ->select(
                'sol.respuesta'
            )
            ->where('sol.id_pregunta', $id)
            ->get();
        return response()->json($res);
    }
    //Cuestionario
    public function store_cuestionario(Request $request)
    {
        $cat_cuestionario                = new Cuestionario();
        $cat_cuestionario->id_pregunta   = request("id_pregunta");
        $cat_cuestionario->id_respuesta  = request("id_respuesta");
        $cat_cuestionario->id_alumno     = request("id_alumno");
        $cat_cuestionario->id_evaluacion = request("id_evaluacion");
        DB::beginTransaction();
        try {
            if ($cat_cuestionario->save()) {
                $msg = ['status' => 'ok', 'message' => 'Se ha guardado correctamente'];
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

    public function lista_cuestionario($id)
    {

        $results = DB::table('cuestionario as cue')
            ->select(
                'pre.nombre_pregunta',
                'res.respuesta'
            )
            ->join('preguntas as pre', 'pre.id_evaluacion', '=', 'cue.id_evaluacion')
            ->join('solucion as res', 'res.id_solucion', '=', 'cue.id_respuesta')
            ->where('cue.id_alumno', $id)
            ->get();

        return response()->json($results);
    }
}
