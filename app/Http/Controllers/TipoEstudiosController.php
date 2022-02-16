<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\TipoEstudios;

class TipoEstudiosController extends Controller
{

    protected $tipos;

    public function __construct(TipoEstudios $tipos){
        $this->TipoEstudios = $tipos;
    }


    public function index()
    {
        $tipo_estudios = $this->TipoEstudios->obtenerTipoEstudios();
        return view('tipo_estudios.lista', ['TipoEstudios' => $tipo_estudios]);
    }

    public function create()
    {
        return view('tipo_estudios.crear');
    }

    public function store(Request $request)
    {
        $tipo_estudios = new TipoEstudios($request->all());
        $tipo_estudios->save();
        return redirect()->action([TipoEstudiosController::class, 'index']);
    }

    public function show($id)
    {
        $tipo_estudios = $this->TipoEstudios->obtenerTipoEstudiosPorId($id);
        return view('tipo_estudios.ver',['tipo_estudios' => $tipo_estudios]);
    }

    public function edit($id)
    {
        $tipo_estudios = $this->TipoEstudios->obtenerAlumnoPorId($id);
        return view('tipo_estudios.editar',['tipo_estudios' => $tipo_estudios]);
    }

    public function update(Request $request, $id)
    {
        $tipo_estudios = TipoEstudios::find($id);
        $tipo_estudios->fill($request->all());
        $tipo_estudios->save();
        return redirect()->action([TipoEstudiosController::class, 'index']);
    }

    public function destroy($id)
    {
        $tipo_estudios = TipoEstudios::find($id);
        $tipo_estudios->delete();
        return redirect()->action([TipoEstudiosController::class, 'index']);
    }
}
