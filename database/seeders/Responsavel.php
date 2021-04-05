<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Responsavel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('responsaveis')->insert([
            'id'=>'1',
            'user_id'=>4,
            'parentesco_aluno'=>'Irmão'
        ]);

        DB::table('responsaveis')->insert([
            'id'=>'2',
            'user_id'=>6,
            'parentesco_aluno'=>'Pai'
        ]);

        DB::table('responsaveis')->insert([
            'id'=>'3',
            'user_id'=>7,
            'parentesco_aluno'=>'Pai'
        ]);

        DB::table('responsaveis')->insert([
            'id'=>'4',
            'user_id'=>8,
            'parentesco_aluno'=>'Mãe'
        ]);

        DB::table('responsaveis')->insert([
            'id'=>'5',
            'user_id'=>9,
            'parentesco_aluno'=>'Mãe'
        ]);
    }
}
