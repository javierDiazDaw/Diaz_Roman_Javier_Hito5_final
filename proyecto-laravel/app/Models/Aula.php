<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    const UPDATED_AT = 'false';
    public $timestamps=false;
    protected $table = 'aulas';
    protected $fillable = ['aula','nombreAula'];
    protected $primaryKey = "aula";

    public function obtenerAulas(){

        return Aula::all();

    }

    public function obtenerUnAula($aula){
        return Aula::find($aula);
    }
}
