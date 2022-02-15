<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEstudios extends Model
{
    use HasFactory;

    protected $table = "tipo_estudios";

    protected $fillable = ['nombre','asinaturas','modalidad'];

    public function obtenerTipoEstudios(){
        return TipoEstudios::all();
    }

    public function obtenerTipoEstudiosPorId($id){
        return TipoEstudios::find($id);
    }
}
