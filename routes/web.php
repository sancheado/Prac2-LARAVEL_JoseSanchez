<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CentroEducacionalesController;
use App\Http\Controllers\TipoEstudiosController;
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

//Routes for Alumno

Route::get('/alumnos',[AlumnoController::class, 'index']); //Mostrar todos

Route::get('/alumnos/crear', [AlumnoController::class, 'create']); //Mostrar menu para insertar uno new mediante GET
Route::post('/alumnos/crear',  [AlumnoController::class, 'store']); //Peticion POST de insertar un alumno nuevo

Route::get('/alumnos/ver/{id}', [AlumnoController::class, 'show']); //Mostrar un alumno solo.

Route::get('/alumnos/editar/{id}', [AlumnoController::class,'edit']); //Acceso a la vista para poder UPDATEAR los datos de 1 alumno
Route::put('/alumnos/editar/{id}', [AlumnoController::class, 'update']); //Updater un solo alumno

Route::get('/alumnos/eliminar/{id}', [AlumnoController::class, 'destroy']); //eliminar alumno


//Routes for Centros
Route::get('/centros',[CentroEducacionalesController::class, 'index']);
Route::get('/centros/crear', [CentroEducacionalesController::class, 'create']); //Mostrar menu para insertar uno new mediante GET
Route::post('/centros/crear',  [CentroEducacionalesController::class, 'store']); //Peticion POST de insertar un centro nuevo


Route::get('/centros/ver/{id}', [CentroEducacionalesController::class, 'show']); //Mostrar un centro solo.

Route::get('/centros/editar/{id}', [CentroEducacionalesController::class,'edit']); //Acceso a la vista para poder UPDATEAR los datos de 1 centro
Route::put('/centros/editar/{id}', [CentroEducacionalesController::class, 'update']); //Updater un solo centro


Route::get('/centros/eliminar/{id}', [CentroEducacionalesController::class, 'destroy']); //eliminar centro

//Routes for Tipo Estudios
Route::get('/tipos',[TipoEstudiosController::class, 'index']);
Route::get('/tipo_estudios',[TipoEstudiosController::class, 'index']);

Route::get('/tipos/crear', [TipoEstudiosController::class, 'create']);
Route::post('/tipos/crear',  [TipoEstudiosController::class, 'store']);
Route::get('/tipo_estudios/crear', [TipoEstudiosController::class, 'create']);
Route::post('/tipo_estudios/crear',  [TipoEstudiosController::class, 'store']);

Route::get('/tipos/ver/{id}', [TipoEstudiosController::class, 'show']); //Mostrar un centro solo.
Route::get('/tipo_estudios/ver/{id}', [TipoEstudiosController::class, 'show']); //Mostrar un centro solo.

Route::get('/tipos/editar/{id}', [TipoEstudiosController::class,'edit']); //Acceso a la vista para poder UPDATEAR los datos de 1 centro
Route::get('/tipo_estudios/editar/{id}', [TipoEstudiosController::class,'edit']); //Acceso a la vista para poder UPDATEAR los datos de 1 centro

Route::put('/tipos/editar/{id}', [TipoEstudiosController::class, 'update']); //Updater un solo centro
Route::put('/tipo_estudios/editar/{id}', [TipoEstudiosController::class, 'update']); //Updater un solo centro

Route::get('/tipo_estudios/eliminar/{id}', [TipoEstudiosController::class, 'destroy']);  //eliminar tipo
Route::get('/tipos/eliminar/{id}', [TipoEstudiosController::class, 'destroy']);  //eliminar tipo
