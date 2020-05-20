<?php

namespace App\Http\Controllers;

use App;
use App\Http\Controllers\Controller;
//use App\Http\Requests\Alumno\AlumnoRequest;
use App\Models\RolesUser;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id    = Auth::user()->id;
        $roles = RolesUser::where('user_id', $id)->first();
        if ($roles->rol_id == 1) {
            return view('home_admin');
        } else {
            return view('home');
        }
    }
}
