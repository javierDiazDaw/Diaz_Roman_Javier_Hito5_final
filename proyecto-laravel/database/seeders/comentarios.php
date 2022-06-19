<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class comentarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comentarios')->insert(['idIncidencia'=> 1, 'comentario'=> 'Pantalla de marca Apple', 'fechaComentario'=> '2022-04-13']);
        DB::table('comentarios')->insert(['idIncidencia'=> 2,'comentario'=> 'Coste no superior a 100 €', 'fechaComentario'=> '2022-04-13']);
            
    }
}
