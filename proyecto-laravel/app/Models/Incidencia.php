<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Incidencia extends Model
{
    use HasFactory;

    const UPDATED_AT = 'false';
    public $timestamps=false;
    protected $table=   'incidencias';
    protected $fillable=['idIncidencia','idUsuario','titulo','descripcion','aula','fechaCreacion','fechaModificacion','fechaCierre','estados'];
    //$fechaCreacion = Carbon::now();
    protected $primaryKey="idIncidencia";

    public function obtenerIncidencias(){

        return Incidencia::all();
    }

    public function obtenerUnaIncidencia($idIncidencia){
        return Incidencia::find($idIncidencia);
    }

    public function obtenerIncidenciasPorUsuario($idUsuario){
        return Incidencia::where('IdUsuario',  $idUsuario)->get();
                           
    }

}
