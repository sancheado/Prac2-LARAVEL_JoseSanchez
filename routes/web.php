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
Route::get('/alumnos',[AlumnoController::class, 'index']);
Route::get('/alumnos/crear', [AlumnoController::class, 'create']);
Route::post('/alumnos/crear',  [AlumnoController::class, 'store']);

//Routes for Centros
Route::get('/centros',[CentroEducacionalesController::class, 'index']);
Route::get('/centros/crear', [CentroEducacionalesController::class, 'create']);
Route::post('/centros/crear',  [CentroEducacionalesController::class, 'store']);

//Routes for Tipo Estudios
Route::get('/tipos',[TipoEstudiosController::class, 'index']);
Route::get('/tipo_estudios',[TipoEstudiosController::class, 'index']);

Route::get('/tipos/crear', [TipoEstudiosController::class, 'create']);
Route::post('/tipos/crear',  [TipoEstudiosController::class, 'store']);
Route::get('/tipo_estudios/crear', [TipoEstudiosController::class, 'create']);
Route::post('/tipo_estudios/crear',  [TipoEstudiosController::class, 'store']);

