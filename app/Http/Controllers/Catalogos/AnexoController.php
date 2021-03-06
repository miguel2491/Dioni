<?php

namespace App\Http\Controllers\Catalogos;

use App;
use App\Http\Controllers\Controller;
use App\Models\Catalogos\Anexos;
use App\Models\Usuario;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AnexoController extends Controller
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
        return view('Catalogos/alumno.index');
    }

    public function lista_anexo()
    {
        $results = DB::table('anexos as a')
            ->select('a.id', 'a.id_clase', 'a.tipo', 'a.link', 'c.clase')
            ->leftjoin('clase as c', 'c.id', '=', 'a.id_clase')
            ->get();
        return response()->json(['data' => $results]);
    }
    public function store(Request $request)
    {
        $id_clase             = request("id_clase");
        $tipo                 = request("tipo");
        $link                 = request("link");
        $cat_anexos           = new Anexos();
        $cat_anexos->id_clase = $id_clase;
        $cat_anexos->tipo     = $tipo;
        $cat_anexos->link     = $link;
        DB::beginTransaction();
        try {
            if ($cat_anexos->save()) {
                $id  = $cat_anexos->id;
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
    public function edit($id)
    {
        $results = DB::table('alumno as a')
            ->select('a.id', 'a.username as nombre', 'a.id_carrera', 'u.email', 'u.name')
            ->leftjoin('carrera as c', 'c.user_id', '=', 'a.id_carrera')
            ->leftjoin('users as u', 'u.id', '=', 'a.id_user')
            ->where('a.id', $id)->get();
        return response()->json($results);
    }




    public function anexoClase($id)
    {
        $results = DB::table('anexos')
            ->select('id', 'tipo', 'link')
           
            ->where('id_clase', $id)->get();
        return response()->json($results);
    }

    //Update
    public function update(Request $request, $id)
    {

        $pass                   = request("password");
        $nombre                 = request("nombre");
        $carrera                = request("carrera");
        $cat_alumno             = Anexos::findOrFail($id);
        $cat_alumno->username   = request("nombre");
        $cat_alumno->id_carrera = request("carrera");

        DB::beginTransaction();
        try {
            if ($cat_alumno->save()) {
                $idu                = $cat_alumno->id_user;
                $cat_usuario        = Usuario::findOrFail($idu);
                $cat_usuario->name  = request("usuario");
                $cat_usuario->email = request("email");
                if ($pass != "") {
                    $cat_usuario->password = Hash::make($pass);
                }
                if ($cat_usuario->save()) {
                    $msg = ['status' => 'ok', 'message' => 'Se Actualizo correctamente', 'idu' => $idu];
                }
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
        $cat_anexo = Anexos::find($id);
        DB::beginTransaction();
        try {
            if ($cat_anexo->delete()) {
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
            ->select('m.id', 'm.nombre', 'm.id_cuatrimestre', 'm.id_carrera', 'c.lapso', 'ca.carrera')
            ->leftjoin('cuatrimestre as c', 'c.id', '=', 'm.id_cuatrimestre')
            ->leftjoin('carrera as ca', 'ca.user_id', '=', 'm.id_carrera')
            ->get();
        return response()->json($results);
    }

    //Asigna MatALumno
    public function asigna_materia_alumno(Request $request)
    {
        $id_alumno                             = request("id_alumno");
        $id_materia                            = request("id_materia");
        $id_cuatrimestre                       = request("id_cuatrimestre");
        $calificacionfinal                     = request("calificacionfinal");
        $aprobado                              = request("aprobado");
        $cat_materia_alumno                    = new CatMatAlu();
        $cat_materia_alumno->id_alumno         = $id_alumno;
        $cat_materia_alumno->id_materia        = $id_materia;
        $cat_materia_alumno->id_cuatrimestre   = $id_cuatrimestre;
        $cat_materia_alumno->calificacionfinal = $calificacionfinal;
        $cat_materia_alumno->aprobado          = $aprobado;
        DB::beginTransaction();
        try {
            if ($cat_materia_alumno->save()) {
                $id = $cat_materia_alumno->id;
                if ($cat_roles_user->save()) {
                    $msg = ['status' => 'ok', 'message' => 'Se ha guardado correctamente'];
                }
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
