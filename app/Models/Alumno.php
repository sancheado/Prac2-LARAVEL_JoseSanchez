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
}
