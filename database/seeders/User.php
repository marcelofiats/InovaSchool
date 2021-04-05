<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'=>1,
            'email'=>'marcelo.fiats@gmail.com',
            'password'=>Hash::make('fiats8702'),
            'permissao'=>'Administrador',
            'pessoa_id'=>'1'
        ]);
        DB::table('users')->insert([
            'id'=>2,
            'email'=>'veronica.regiani@gmail.com',
            'password'=>Hash::make('1234'),
            'permissao'=>'Professor',
            'pessoa_id'=>'2'
        ]);
        DB::table('users')->insert([
            'id'=>3,
            'email'=>'alberto@gmail.com',
            'password'=>Hash::make('1234'),
            'permissao'=>'Diretor',
            'pessoa_id'=>'3'
        ]);
        DB::table('users')->insert([
            'id'=>4,
            'email'=>'Oliver@gmail.com',
            'password'=>Hash::make('1234'),
            'permissao'=>'Responsavel',
            'pessoa_id'=>4
        ]);

        DB::table('users')->insert([
            'id'=>5,
            'email'=>'pricila@gmail.com',
            'password'=>Hash::make('1234'),
            'permissao'=>'Secretaria',
            'pessoa_id'=>5
        ]);

        DB::table('users')->insert([
            'id'=>6,
            'email'=>'carlos@gmail.com',
            'password'=>Hash::make('1234'),
            'permissao'=>'Responsavel',
            'pessoa_id'=>6
        ]);

        DB::table('users')->insert([
            'id'=>7,
            'email'=>'gerson@gmail.com',
            'password'=>Hash::make('1234'),
            'permissao'=>'Responsavel',
            'pessoa_id'=>7
        ]);

        DB::table('users')->insert([
            'id'=>8,
            'email'=>'jasmini@gmail.com',
            'password'=>Hash::make('1234'),
            'permissao'=>'Responsavel',
            'pessoa_id'=>8
        ]);

        DB::table('users')->insert([
            'id'=>9,
            'email'=>'mariana@gmail.com',
            'password'=>Hash::make('1234'),
            'permissao'=>'Responsavel',
            'pessoa_id'=>9
        ]);
    }
}
