<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Aluno extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alunos')->insert([
            'id'=>1,
            'nome'=>'Camila Andrade',
            'rg'=>'32.569.934-9',
            'data_nascimento'=>'2015-05-22 00:00:00',
            'sexo'=>'F',
            'status'=>1,
            'responsavel_id'=>'1',
        ]);

        DB::table('alunos')->insert([
            'id'=>2,
            'nome'=>'Paloma Leite',
            'rg'=>'34.956.349-9',
            'data_nascimento'=>'2015-07-18 00:00:00',
            'sexo'=>'F',
            'status'=>1,
            'responsavel_id'=>'2',
        ]);

        DB::table('alunos')->insert([
            'id'=>3,
            'nome'=>'Enzo Rodrigues Machado',
            'rg'=>'98.346.633-7',
            'data_nascimento'=>'2015-09-15 00:00:00',
            'sexo'=>'M',
            'status'=>1,
            'responsavel_id'=>'3',
        ]);

        DB::table('alunos')->insert([
            'id'=>4,
            'nome'=>'Victor Palermo',
            'rg'=>'45.379.668-7',
            'data_nascimento'=>'2014-07-22 00:00:00',
            'sexo'=>'M',
            'status'=>1,
            'responsavel_id'=>'4',
        ]);
        DB::table('alunos')->insert([
            'id'=>5,
            'nome'=>'Luciana Palermo',
            'rg'=>'75.321.691-3',
            'data_nascimento'=>'2015-11-21 00:00:00',
            'sexo'=>'F',
            'status'=>1,
            'responsavel_id'=>'4',
        ]);
        DB::table('alunos')->insert([
            'id'=>6,
            'nome'=>'Larissa Pacheco Lira',
            'rg'=>'45.367.555-8',
            'data_nascimento'=>'2015-01-25 00:00:00',
            'sexo'=>'F',
            'status'=>1,
            'responsavel_id'=>'5',
        ]);
        DB::table('alunos')->insert([
            'id'=>7,
            'nome'=>'Layani Pacheco Lira',
            'rg'=>'45.367.587-9',
            'data_nascimento'=>'2015-01-25 00:00:00',
            'sexo'=>'F',
            'status'=>1,
            'responsavel_id'=>'5',
        ]);
    }
}
