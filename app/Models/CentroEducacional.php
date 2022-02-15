<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentroEducacional extends Model
{
    use HasFactory;

    protected $table = "centros";

    protected $fillable = ['nombre','localidad','tipo_estudios','direccion','nalumnos','id_centro','id_tipo'];

    public function obtenerCentroEducacional(){
        return CentroEducacional::all();
    }

    public function obtenerCentroEducacionalPorId($id){
        return CentroEducacional::find($id);
    }
}
