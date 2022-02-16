<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEstudios extends Model
{
    use HasFactory;

    protected $table = "tipo_estudio";

    protected $fillable = ['nombre','asignaturas','modalidad','id_alumno'];

    public function obtenerTipoEstudios(){
        return TipoEstudios::all();
    }

    public function obtenerTipoEstudiosPorId($id){
        return TipoEstudios::find($id);
    }
}
