<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['nombre'=> 'Javier' , 'apellidos'=> 'Díaz Román' , 'email'=> 'javier.diaz.roman.al@iespoligonosur.org',
        'dni'=> '49028792Z', 'telefono'=>'637913632', 'password'=>'developer', 'rol'=>'administrador']);

        DB::table('users')->insert(['nombre'=> 'Jesús' , 'apellidos'=> 'Domínguez Fernández' , 'email'=> 'jesus.dominguez.fernandez.al@iespoligonosur.org',
        'dni'=> '49028792Z', 'telefono'=>'637913632', 'password'=>'developer', 'rol'=>'cliente']);

        DB::table('users')->insert(['nombre'=> 'Sofía' , 'apellidos'=> 'García Trenas' , 'email'=> 'Sofia.Garcia.Trenas.al@iespoligonosur.org',
        'dni'=> '49028792Z', 'telefono'=>'637913632', 'password'=>'developer', 'rol'=>'cliente']);
    }
}
