<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class aulas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aulas')->insert(['aula'=> '1', 'nombreAula'=> '1ESO A']);
        DB::table('aulas')->insert(['aula'=> '2', 'nombreAula'=> '1ESO B']);
        DB::table('aulas')->insert(['aula'=> '3', 'nombreAula'=> '2ESO A']);
        DB::table('aulas')->insert(['aula'=> '4', 'nombreAula'=> '2ESO B']);
        DB::table('aulas')->insert(['aula'=> '5', 'nombreAula'=> '3ESO A']);
        DB::table('aulas')->insert(['aula'=> '6', 'nombreAula'=> '3ESO B']);
        DB::table('aulas')->insert(['aula'=> '7', 'nombreAula'=> '4ESO A']);
        DB::table('aulas')->insert(['aula'=> '8', 'nombreAula'=> '4ESO B']);      
    }
}
