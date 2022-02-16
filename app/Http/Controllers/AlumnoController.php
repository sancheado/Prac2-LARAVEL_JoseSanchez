<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Alumno;


class AlumnoController extends Controller
{
    protected $alumnos;

    public function __construct(Alumno $alumnos){
        $this->alumno = $alumnos;
    }
    public function index()
    {
        $alumnos = $this->alumno->obtenerAlumnos();
        return view('alumnos.lista' , ['alumnos' => $alumnos]);
    }

    public function create()
    {
        return view('alumnos.crear');
    }

    public function store(Request $request)
    {
        $alumnos = new Alumno($request->all());
        $alumnos->save();
        return redirect()->action([AlumnoController::class, 'index']);
    }

    public function show($id)
    {
        $alumnos = $this->alumno->obtenerAlumnoPorId($id);
        return view('alumnos.ver',['alumno' => $alumnos]);
    }

    public function edit($id)
    {
        $alumnos = $this->alumno->obtenerAlumnoPorId($id);
        return view('alumnos.editar',['alumno' => $alumnos]);
    }

    public function update(Request $request, $id)
    {
        $alumnos = Alumno::find($id);
        $alumnos->fill($request->all());
        $alumnos->save();
        return redirect()->action([AlumnoController::class, 'index']);
    }

    public function destroy($id)
    {
        $alumnos = Alumno::find($id);
        $alumnos->delete();
        return redirect()->action([AlumnoController::class, 'index']);
    }
}
