<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $table = "alumnos";

    protected $fillable = ['nombre','apellidos','edad','direccion','id_centro'];

    public function obtenerAlumnos(){
        return Alumno::all();
    }

    public function obtenerAlumnoPorId($id){
        return Alumno::find($id);
    }

    //Mostramos el centro en función de alumno. relacion 1:1
    public function centro($id){
        return $this->hasOne("App\CentroEducacional");
    }
}
