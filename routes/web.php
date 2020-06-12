<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/******USUARIOS********/
Route::get('usuarios/getalumno/{id}', 'UsuariosController@getAlumno');
Route::get('usuarios/getmaestro/{id}', 'UsuariosController@getMaestro');
Route::get('usuarios/listar', 'UsuariosController@listado');
/****PROFESOR***/
Route::resource('profesor', 'Catalogos\ProfesorController', ['except' => ['create', 'store', 'update', 'destroy', 'edit', 'show']]);
Route::get('profesor/lista', 'Catalogos\ProfesorController@lista');
Route::post('profesor/guardar', 'Catalogos\ProfesorController@store');
Route::get('profesor/datos/{id}', 'Catalogos\ProfesorController@edit');
Route::put('profesor/update/{id}', 'Catalogos\ProfesorController@update');
Route::delete('profesor/delete/{id}', 'Catalogos\ProfesorController@destroy');
/****ALUMNOS***/
Route::resource('alumnos', 'Catalogos\AlumnosController', ['except' => ['create', 'store', 'update', 'destroy', 'edit', 'show']]);
Route::get('alumnos/listado', 'Catalogos\AlumnosController@lista');
Route::post('alumnos/guardar', 'Catalogos\AlumnosController@store');
Route::get('alumnos/datos/{id}', 'Catalogos\AlumnosController@edit');
Route::put('alumnos/update/{id}', 'Catalogos\AlumnosController@update');
Route::delete('alumnos/delete/{id}', 'Catalogos\AlumnosController@destroy');
Route::get('alumnos/from_u/{id}', 'Catalogos\AlumnosController@fromUser');
/****CARRERAS***/
Route::resource('carreras', 'Catalogos\CarrerasController', ['except' => ['create', 'store', 'update', 'destroy', 'edit', 'show']]);
Route::get('carreras/listar', 'Catalogos\CarrerasController@listado');
Route::post('carreras/guardar', 'Catalogos\CarrerasController@store');
Route::get('carreras/datos/{id}', 'Catalogos\CarrerasController@edit');
Route::put('carreras/update/{id}', 'Catalogos\CarrerasController@update');
Route::delete('carreras/delete/{id}', 'Catalogos\CarrerasController@destroy');

/****MATERIAS***/
Route::resource('materias', 'Catalogos\MateriasController', ['except' => ['create', 'store', 'update', 'destroy', 'edit', 'show']]);
Route::get('materias/listar', 'Catalogos\MateriasController@listar');
Route::get('materias/listado', 'Catalogos\MateriasController@listado');
Route::post('materias/guardar', 'Catalogos\MateriasController@store');
Route::get('materias/datos/{id}', 'Catalogos\MateriasController@edit');
Route::put('materias/update/{id}', 'Catalogos\MateriasController@update');
Route::delete('materias/delete/{id}', 'Catalogos\MateriasController@destroy');

/****CUATRIMESTRES***/
Route::resource('cuatrimestres', 'Catalogos\CuatrimestresController', ['except' => ['create', 'store', 'update', 'destroy', 'edit', 'show']]);
Route::get('cuatrimestres/lista', 'Catalogos\CuatrimestresController@listado');
Route::post('cuatrimestres/guardar', 'Catalogos\CuatrimestresController@store');
Route::get('cuatrimestres/datos/{id}', 'Catalogos\CuatrimestresController@edit');
Route::put('cuatrimestres/update/{id}', 'Catalogos\CuatrimestresController@update');
Route::delete('cuatrimestres/delete/{id}', 'Catalogos\CuatrimestresController@destroy');

/****CLASES***/
Route::resource('clases', 'Catalogos\ClasesController', ['except' => ['create', 'store', 'update', 'destroy', 'edit', 'show']]);
Route::get('clases/lista', 'Catalogos\ClasesController@lista');
Route::get('clases/listado', 'Catalogos\ClasesController@listado');
Route::post('clases/guardar', 'Catalogos\ClasesController@store');
Route::get('clases/datos/{id}', 'Catalogos\ClasesController@edit');
Route::put('clases/update/{id}', 'Catalogos\ClasesController@update');
Route::delete('clases/delete/{id}', 'Catalogos\ClasesController@destroy');
/*CLASES ASIGNADAS*/
Route::get('clases_asignadas', 'Catalogos\ClasesController@asignadas');
Route::get('clases/lista_asignadas', 'Catalogos\ClasesController@lista_asignadas');

/***PANTALLA MAESTRO***/
Route::resource('pan_maestro', 'Maestro\MaestroController', ['except' => ['create', 'store', 'update', 'destroy', 'edit', 'show']]);
Route::get('menu_profe', 'Maestro\MaestroController@menu_profe');
Route::get('pan_maestro/asignatura', 'Maestro\MaestroController@asignatura');
Route::get('pan_maestro/asignatura_clase', 'Maestro\MaestroController@asignatura_clase');
Route::get('evaluacion_maestro', 'Maestro\MaestroController@evalua_maestro_vista');
Route::get('cuestionario_maestro', 'Maestro\MaestroController@cuestionario_maestro_vista');
Route::get('maestro/clase', 'Maestro\MaestroController@clase');
Route::post('maestro/clase_guardar', 'Maestro\MaestroController@clase_save');
/***PANTALLA ALUMNO***/
Route::resource('pan_alumno', 'Alumno\AlumnoController', ['except' => ['create', 'store', 'update', 'destroy', 'edit', 'show']]);
Route::get('menu_alumno', 'Alumno\AlumnoController@menu_alumno');
Route::get('pan_alumno/clases', 'Alumno\AlumnoController@clase_vista');
Route::get('evaluacion_alumno', 'Alumno\AlumnoController@evalua_alumno_vista');
Route::get('cuestionario_alumno', 'Alumno\AlumnoController@cuestionario_alumno_vista');
/*MATERIAS*/
Route::get('materia/{id}', 'Materias\MateriasController@edit');

Route::get('materia/clases/{category}/post/{post}', 'Materias\MateriasController@materia_clase')->name('materia.clase');
//*****************************/
/********EVALUACIONES**********/
/*****************************/
Route::get('evaluacion/profesor/{id}', 'Catalogos\EvaluacionesController@con_eva_profe');

Route::post('evaluacion/guardar', 'Catalogos\EvaluacionesController@store');
Route::get('evaluacion/listar', 'Catalogos\EvaluacionesController@listado');
Route::get('evaluacion/consulta/{id}', 'Catalogos\EvaluacionesController@evaluacion_');
Route::post('pregunta/guardar', 'Catalogos\EvaluacionesController@store_pregunta');
Route::get('evaluacion/con_pregunta/{id}', 'Catalogos\EvaluacionesController@evaluacion_preguntas');
Route::post('respuesta/guardar', 'Catalogos\EvaluacionesController@store_respuesta');
Route::get('evaluacion/con_respuesta/{id}', 'Catalogos\EvaluacionesController@evaluacion_respuestas');
Route::post('cuestionario/guardar', 'Catalogos\EvaluacionesController@store_cuestionario');
Route::get('cuestionario/consulta/{id}', 'Catalogos\EvaluacionesController@lista_cuestionario');

//CHEMAS
Route::get('catera_materia_alumno/{id}', 'Catalogos\MateriasController@lista_materia_alumno');
Route::post('asignar_materia/guardar', 'Catalogos\AlumnosController@asigna_materia_alumno');
Route::post('asignar_clases_maestro/guardar', 'Catalogos\ClasesController@store_clases_maestro');
Route::post('select_materia_alumno/materias', 'Catalogos\ClasesController@lista_clase_maestro');
Route::post('delete_clase/delete', 'Catalogos\ClasesController@eliminaClase');
Route::post('anexo/guardar', 'Catalogos\AnexoController@store');
Route::get('anexo/lista/{id}', 'Catalogos\AnexoController@lista_anexo');
Route::delete('anexo/delete/{id}', 'Catalogos\AnexoController@destroy');
Route::get('perfil/', 'HomeController@perfil');
Route::get('carreras/alumno/{id}', 'Catalogos\CarrerasController@carreraAlumnoView');
Route::get('cuatrimestres/alumno/{id}', 'Catalogos\CuatrimestresController@cuatrimestreAlumno');
Route::get('cuatrimestres/datos_u/{id}', 'Catalogos\CuatrimestresController@cuatrimestredatos');
Route::get('cuatrimestres/materias/{id}', 'Catalogos\CuatrimestresController@cuatrimestreView');
Route::get('cuatrimestres/materias/datos/{id}/{id_alumno}', 'Catalogos\CuatrimestresController@cuatrimestremateriasDatos');

//cuatrimestredatos
