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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/****PROFESOR***/
Route::resource('profesor', 'Catalogos\ProfesorController', ['except' => ['create', 'store', 'update', 'destroy', 'edit', 'show']]);
Route::get('profesor/lista', 'Catalogos\ProfesorController@lista');
Route::post('profesor/guardar', 'Catalogos\ProfesorController@store');
Route::get('profesor/datos/{id}', 'Catalogos\ProfesorController@edit');
Route::put('profesor/update/{id}', 'Catalogos\ProfesorController@update');
Route::delete('profesor/delete/{id}', 'Catalogos\ProfesorController@destroy');
/****ALUMNOS***/
Route::resource('alumnos', 'Catalogos\AlumnosController', ['except' => ['create', 'store', 'update', 'destroy', 'edit', 'show']]);
Route::get('alumnos/listado', 'Catalogos\AlumnosController@listado');
Route::post('alumnos/guardar', 'Catalogos\AlumnosController@store');
Route::get('alumnos/datos/{id}', 'Catalogos\AlumnosController@edit');
Route::put('alumnos/update/{id}', 'Catalogos\AlumnosController@update');
Route::delete('alumnos/delete/{id}', 'Catalogos\AlumnosController@destroy');
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
Route::post('clases/guardar', 'Catalogos\ClasesController@store');
Route::get('clases/datos/{id}', 'Catalogos\ClasesController@edit');
Route::put('clases/update/{id}', 'Catalogos\ClasesController@update');
Route::delete('clases/delete/{id}', 'Catalogos\ClasesController@destroy');
/*CLASES ASIGNADAS*/
Route::get('clases_asignadas', 'Catalogos\ClasesController@asignadas');
Route::get('clases/lista_asignadas', 'Catalogos\ClasesController@lista_asignadas');

/***PANTALLA MAESTRO***/
Route::resource('pan_maestro', 'Maestro\MaestroController', ['except' => ['create', 'store', 'update', 'destroy', 'edit', 'show']]);
Route::get('pan_maestro/asignatura', 'Maestro\MaestroController@asignatura');
Route::get('pan_maestro/asignatura_clase', 'Maestro\MaestroController@asignatura_clase');
/***PANTALLA ALUMNO***/
Route::resource('pan_alumno', 'Alumno\AlumnoController', ['except' => ['create', 'store', 'update', 'destroy', 'edit', 'show']]);