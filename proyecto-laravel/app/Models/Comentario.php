<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Comentario extends Model
{
    use HasFactory;

    const UPDATED_AT = 'false';
    public $timestamps=false;
    protected $table=   'comentarios';
    protected $fillable=['idComentario','idIncidencia','comentario','fechaComentario'];
    protected $primaryKey="idComentario";

    public function obtenerComentarios(){

        return Comentario::all();

    }

    public function obtenerComentariosId($idIncidencia){
        return DB::select('SELECT * 
                            FROM `comentarios` 
                            WHERE idIncidencia=:idIncidencia',
                            ['idIncidencia'=>$idIncidencia]);
    }

}
