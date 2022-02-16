<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentroEducacional extends Model
{
    use HasFactory;

    protected $table = "centros";

    protected $fillable = ['nombre','localidad','direccion','n_alumnos','id_alumno','id_tipo'];

    public function obtenerCentroEducacional(){
        return CentroEducacional::all();
    }

    public function obtenerCentroEducacionalPorId($id){
        return CentroEducacional::find($id);
    }
}
