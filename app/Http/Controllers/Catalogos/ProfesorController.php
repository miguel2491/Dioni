<?php

namespace App\Http\Controllers\Catalogos;

use App\Http\Controllers\Controller;
use App\Models\Catalogos\Profesor;
use App\Models\RolesUser;
use App\Models\Usuario;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfesorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('Catalogos/profesor.index');
    }

    public function lista()
    {
        $results = DB::table('maestro as m')
            ->select('m.id', 'm.nombre', 'm.email', 'u.name')
            ->leftjoin('users as u', 'u.id', '=', 'm.id_user')
            ->get();
        return response()->json(['data' => $results]);
    }

    public function store(Request $request)
    {
        $email                 = request("email");
        $password              = request("password");
        $nombre                = request("nombre");
        $app_paterno           = request("app_paterno");
        $app_materno           = request("app_materno");
        $carrera               = request("carrera");
        $rol                   = request("rol");
        $cat_usuario           = new Usuario();
        $cat_usuario->name     = $nombre;
        $cat_usuario->email    = $email;
        $cat_usuario->password = Hash::make($password);
        DB::beginTransaction();
        try {
            if ($cat_usuario->save()) {
                $id                      = $cat_usuario->id;
                $cat_roles_user          = new RolesUser();
                $cat_roles_user->rol_id  = 2;
                $cat_roles_user->user_id = $id;
                if ($cat_roles_user->save()) {
                    $cat_profesor           = new Profesor();
                    $cat_profesor->id_user  = $id;
                    $cat_profesor->username = $nombre;
                    $cat_profesor->nombre   = $nombre . " " . $app_paterno . " " . $app_materno;
                    $cat_profesor->email    = $email;
                    if ($cat_profesor->save()) {
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
        $results = DB::table('maestro as m')
            ->select('m.id', 'm.nombre', 'm.username', 'u.email')
            ->leftjoin('users as u', 'u.id', '=', 'm.id_user')
            ->where('m.id', $id)->get();
        return response()->json($results);
    }
    //Update
    public function update(Request $request, $id)
    {

        $pass                 = request("password");
        $nombre               = request("nombre");
        $carrera              = request("carrera");
        $cat_profesor         = Profesor::findOrFail($id);
        $cat_profesor->nombre = request("nombre");
        //$cat_profesor->id_carrera = request("email");
        $cat_profesor->email = request("email");

        DB::beginTransaction();
        try {
            if ($cat_profesor->save()) {
                $idu                = $cat_profesor->id_user;
                $cat_usuario        = Usuario::findOrFail($idu);
                $cat_usuario->name  = $nombre;
                $cat_usuario->email = request("email");
                if ($pass != "") {
                    $cat_usuario->password = Hash::make($pass);
                }
                if ($cat_usuario->save()) {
                    $msg = ['status' => 'ok', 'message' => 'Se Actualizo correctamente'];
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
        $msg          = [];
        $cat_profesor = Profesor::find($id);
        $id           = $cat_profesor->id_user;
        DB::beginTransaction();
        try {
            if ($cat_profesor->delete()) {
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
}
