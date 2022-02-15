<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CentroEducacionalesController extends Controller
{

    public function index()
    {
        $centros = $this->centros->obtenerCentroEducacional();
        return view('centros.lista', ['centros' => $centros]);
    }

    public function create()
    {
        return view('centros.crear');
    }

    public function store(Request $request)
    {
        $centros = new Centro($request->all());
        $centros->save();
        return redirect()->action([CentroEducacionalesController::class, 'index']);
    }

    public function show($id)
    {
        $centros = $this->centros->obtenerCentroEducacional($id);
        return view('centros.ver',['centros' => $centros]);
    }

    public function edit($id)
    {
        $alumno = $this->alumnos->obtenerCentroEducacionalPorId($id);
        return view('centros.editar',['centros' => $centros]); 
    }

    public function update(Request $request, $id)
    {
        $centros = Centro::find($id);
        $centros->fill($request->all());
        $centros->save();
        return redirect()->action([CentroEducacionalesController::class, 'index']);
    }

    public function destroy($id)
    {
        $centros = Centro::find($id);
        $centros->delete();
        return redirect()->action([CentroEducacionalesController::class, 'index']);
    }
}
