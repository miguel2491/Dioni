<?php

namespace App\Http\Controllers\Catalogos;

use App;
use App\Http\Controllers\Controller;
use App\Models\Catalogos\CateraMateriasAlumno;
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
            ->select('c.id', 'c.clase', 'c.enlace', 'c.id_materia', 'c.id_cuatrimestre'
                , 'c.actividad', 'c.fecha', 'c.id_maestro')
            ->where('c.id', $id)->get();
        return response()->json($results);
    }

    public function clasesMateriaCuatri($id_materia, $id_cuatrimestre)
    {
        $results = DB::table('clase as c')
            ->select('c.id', 'c.clase', 'c.enlace', 'c.id_materia', 'c.id_cuatrimestre'
                , 'c.actividad', 'c.fecha', 'c.id_maestro')
            ->where('c.id_cuatrimestre', $id_cuatrimestre)
            ->where('c.id_materia', $id_materia)->get();
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
    //Clases Maestro
    public function store_clases_maestro(Request $request)
    {

        $cat_clase                  = new Clases();
        $cat_clase->fecha           = request("fecha");
        $cat_clase->clase           = request("clase");
        $cat_clase->id_materia      = request("id_materia");
        $cat_clase->id_cuatrimestre = request("id_cuatrimestre");
        $cat_clase->enlace          = request("enlace");
        $cat_clase->actividad       = request("actividad");
        $cat_clase->id_maestro      = request("id_maestro");
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

    public function lista_clase_maestro(Request $request)
    {
        $id_materia      = request("id_materia");
        $id_cuatrimestre = request("id_cuatrimestre");
        $id_maestro      = request("id_maestro");

        $results = DB::table('clase as c')
            ->select('c.id', 'c.clase', 'c.fecha', 'c.id_materia', 'c.id_cuatrimestre', 'c.enlace', 'c.actividad', 'c.id_maestro', 'm.nombre', 'cu.lapso', 'ma.nombre')
            ->leftjoin('cuatrimestre as cu', 'cu.id', '=', 'c.id_cuatrimestre')
            ->leftjoin('materias as m', 'm.id', '=', 'c.id_materia')
            ->leftjoin('maestro as ma', 'ma.id', '=', 'c.id_maestro')
            ->where('c.id_materia', $id_materia)
            ->where('c.id_cuatrimestre', $id_cuatrimestre)
            ->where('c.id_maestro', $id_maestro)
            ->get();
        return response()->json($results);
    }

    public function eliminaClase(Request $request)
    {
        $idm       = request('id_materia');
        $idc       = request('id_cuatrimestre');
        $msg       = [];
        $cat_clase = Clases::where('id_materia', $idm)->where('id_cuatrimestre', $idc);

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

    public function alumno_asignada($id)
    {
        $results = DB::table('clase as c')
            ->select('c.id', 'c.id_materia', 'c.id_cuatrimestre')
            ->where('c.id', $id)->get();
        return response()->json($results);
    }

    public function clases_materias_profesor()
    {
        return view('Maestro/materiasclases');
    }
    //CAT MATERIA ALUMNO
    public function lista_alumnos()
    {
        $results = DB::table('catera_materias_alumno as cma')
            ->select('cma.id', 'cma.calificacionfinal', 'cma.aprovado', 'a.username as alumno', 'm.nombre as materia', 'cu.lapso as cuatrimestre')
            ->leftjoin('alumno as a', 'a.id', '=', 'cma.id_alumno')
            ->leftjoin('materias as m', 'm.id', '=', 'cma.id_materia')
            ->leftjoin('cuatrimestre as cu', 'cu.id', '=', 'cma.id_cuatrimestre')
            ->get();
        return response()->json(['data' => $results]);
    }

    public function guardar_alumno_as(Request $request)
    {

        $cat_clase                    = new CateraMateriasAlumno();
        $cat_clase->id_alumno         = request("alumno");
        $cat_clase->id_materia        = request("materias");
        $cat_clase->id_cuatrimestre   = request("cuatrimestre");
        $cat_clase->calificacionfinal = request("calificacion");
        $cat_clase->aprovado          = request("aprobado");
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

    public function alumno_asignado_ind($id)
    {
        $results = DB::table('catera_materias_alumno as cma')
            ->select('cma.id', 'cma.calificacionfinal', 'cma.aprovado', 'cma.id_alumno as alumno', 'cma.id_materia as materia', 'cma.id_cuatrimestre as cuatrimestre')
            ->leftjoin('alumno as a', 'a.id', '=', 'cma.id_alumno')
            ->leftjoin('materias as m', 'm.id', '=', 'cma.id_materia')
            ->leftjoin('cuatrimestre as cu', 'cu.id', '=', 'cma.id_cuatrimestre')
            ->where('cma.id', $id)->get();
        return response()->json($results);
    }

    public function update_alumno_as(Request $request, $id)
    {

        $cat_clase                    = CateraMateriasAlumno::findOrFail($id);
        $cat_clase->id_alumno         = request("alumno");
        $cat_clase->id_materia        = request("materias");
        $cat_clase->id_cuatrimestre   = request("cuatrimestre");
        $cat_clase->calificacionfinal = request("calificacion");
        $cat_clase->aprovado          = request("aprobado");
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

    public function destroy_asignado($id)
    {
        $msg       = [];
        $cat_clase = CateraMateriasAlumno::find($id);
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
}
