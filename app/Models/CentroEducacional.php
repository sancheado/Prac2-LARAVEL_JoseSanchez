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

    //Mostramos los alumnos en función del centro. relacion 1:N
    public function obtenerAlumnos(){
        return $this->hasMany("App\Alumno");
    }

    //Mostramos los tipos de estudios en relacion al centro. 1:N
    public function centro(){
        return $this->hasMany("App\CentroEducacional");
    }
}
