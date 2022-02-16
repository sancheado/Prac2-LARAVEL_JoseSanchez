<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CentroEducacional;

class CentroEducacionalesController extends Controller
{

    protected $centros;

    public function __construct(CentroEducacional $centros){
        $this->CentroEducacional = $centros;
    }

    public function index()
    {
        $centros = $this->CentroEducacional->obtenerCentroEducacional();
        return view('centros.lista', ['CentroEducacional' => $centros]);
    }

    public function create()
    {
        return view('centros.crear');
    }

    public function store(Request $request)
    {
        $centros = new CentroEducacional($request->all());
        $centros->save();
        return redirect()->action([CentroEducacionalesController::class, 'index']);
    }

    public function show($id)
    {
        $centros = $this->CentroEducacional->obtenerCentroEducacional($id);
        return view('centros.ver',['centros' => $centros]);
    }

    public function edit($id)
    {
        $alumno = $this->alumnos->obtenerCentroEducacionalPorId($id);
        return view('centros.editar',['centros' => $centros]);
    }

    public function update(Request $request, $id)
    {
        $centros = CentroEducacional::find($id);
        $centros->fill($request->all());
        $centros->save();
        return redirect()->action([CentroEducacionalesController::class, 'index']);
    }

    public function destroy($id)
    {
        $centros = CentroEducacional::find($id);
        $centros->delete();
        return redirect()->action([CentroEducacionalesController::class, 'index']);
    }
}
