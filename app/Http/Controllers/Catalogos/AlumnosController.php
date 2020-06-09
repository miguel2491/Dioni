<?php

namespace App\Http\Controllers\Catalogos;

use App;
use App\Http\Controllers\Controller;
use App\Models\Catalogos\Alumno;
use App\Models\Catalogos\CatMatAlu;
use App\Models\RolesUser;
use App\Models\Usuario;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AlumnosController extends Controller
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
        return view('Catalogos/alumno.index');
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

        $email                 = request("email");
        $password              = request("password");
        $nombre                = request("nombre");
        $usuario               = request("usuario");
        $carrera               = request("carrera");
        $cat_usuario           = new Usuario();
        $cat_usuario->name     = $usuario;
        $cat_usuario->email    = $email;
        $cat_usuario->password = Hash::make($password);
        DB::beginTransaction();
        try {
            if ($cat_usuario->save()) {
                $id                      = $cat_usuario->id;
                $cat_roles_user          = new RolesUser();
                $cat_roles_user->rol_id  = 3;
                $cat_roles_user->user_id = $id;
                if ($cat_roles_user->save()) {
                    $cat_alumno             = new Alumno();
                    $cat_alumno->id_user    = $id;
                    $cat_alumno->id_carrera = $carrera;
                    $cat_alumno->username   = $nombre;
                    if ($cat_alumno->save()) {
                        $msg = ['status' => 'ok', 'message' => 'Se ha guardado correctamente'];
                    }
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
    public function edit($id)
    {
        $results = DB::table('alumno as a')
            ->select('a.id', 'a.username as nombre', 'a.id_carrera', 'u.email', 'u.name')
            ->leftjoin('carrera as c', 'c.user_id', '=', 'a.id_carrera')
            ->leftjoin('users as u', 'u.id', '=', 'a.id_user')
            ->where('a.id', $id)->get();
        return response()->json($results);
    }
    //Update
    public function update(Request $request, $id)
    {

        $pass                   = request("password");
        $nombre                 = request("nombre");
        $carrera                = request("carrera");
        $cat_alumno             = Alumno::findOrFail($id);
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
        $msg        = [];
        $cat_alumno = Alumno::find($id);
        $id         = $cat_alumno->id_user;
        DB::beginTransaction();
        try {
            if ($cat_alumno->delete()) {
                $cat_usuario = Usuario::find($id);
                if ($cat_usuario->delete()) {
                    $msg = ['status' => 'ok', 'message' => 'Se elimino correctamente!'];
                }

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


    public function fromUser($id)
    {
        $results = DB::table('alumno as c')
            ->select('c.id_carrera', 'c.username','c.id')
            ->where('c.id_user', $id)->get();
        return response()->json($results);
    }
   



}
