<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class incidencias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('incidencias')->insert(['idIncidencia'=> 1, 'idUsuario'=>1, 'titulo'=> 'error pantalla' , 'descripcion'=> 'pantalla obsoleta' , 'aula'=> 2,
        'fechaCreacion'=> '2022-04-01', 'fechaModificacion'=>'2022-04-19', 'fechaCierre'=>'2022-04-30', 'estado'=> 'procesado']);

        DB::table('incidencias')->insert(['idIncidencia'=> 2, 'idUsuario'=>2, 'titulo'=> 'tarjeta gráfica' , 'descripcion'=> 'Comprar nueva tarjeta grafica' , 'aula'=> 7,
        'fechaCreacion'=> '2022-04-20', 'fechaModificacion'=>'2022-04-21', 'fechaCierre'=>'2022-04-24', 'estado'=> 'nuevo']);

        DB::table('incidencias')->insert(['idIncidencia'=> 3, 'idUsuario'=>3, 'titulo'=> 'p' , 'descripcion'=> 'p' , 'aula'=> 7,
        'fechaCreacion'=> '2022-04-12', 'fechaModificacion'=>'2022-04-12', 'fechaCierre'=>'2022-04-05', 'estado'=> 'nuevo']);
    }
}
 