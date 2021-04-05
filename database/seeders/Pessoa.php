<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Pessoa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pessoas')->insert([
            'id'=>'1',
            'nome'=>'Marcelo Fiats da Silva',
            'data_nascimento'=>'1987-02-19 00:00:00',
            'sexo'=>'M',
            'cpf'=>'123.123.123-32',
            'rg'=>'12.123.123-2',
            'telefone1'=>'(19)3154-2925',
            'telefone2'=>'(19)3658-3536',
            'cep'=>'13460-000',
            'rua'=>'Flamboyant',
            'numero'=>'123',
            'complemento'=>'casa',
            'bairro'=>'Alvorada',
            'cidade'=>'Nova Odessa',
            'uf'=>'SP'
        ]);

        DB::table('pessoas')->insert([
            'id'=>'2',
            'nome'=>'Verônica Regiani',
            'data_nascimento'=>'1991-12-13 00:00:00',
            'sexo'=>'F',
            'cpf'=>'123.123.123-12',
            'rg'=>'12.123.123-3',
            'telefone1'=>'(19)3154-2925',
            'telefone2'=>'(19)3658-3536',
            'cep'=>'13460-000',
            'rua'=>'Flamboyant',
            'numero'=>'123',
            'complemento'=>'casa',
            'bairro'=>'Alvorada',
            'cidade'=>'Nova Odessa',
            'uf'=>'SP'
        ]);

        DB::table('pessoas')->insert([
            'id'=>'3',
            'nome'=>'Alberto Marinho',
            'data_nascimento'=>'1980-08-15 00:00:00',
            'sexo'=>'M',
            'cpf'=>'123.123.188-88',
            'rg'=>'12.123.123-8',
            'telefone1'=>'(19)99245-6378',
            'telefone2'=>'(19)3658-3536',
            'cep'=>'13460-000',
            'rua'=>'Flamboyant',
            'numero'=>'123',
            'complemento'=>'casa',
            'bairro'=>'Alvorada',
            'cidade'=>'Nova Odessa',
            'uf'=>'SP'
        ]);

        DB::table('pessoas')->insert([
            'id'=>'4',
            'nome'=>'Oliver Fiats',
            'data_nascimento'=>'2000-12-12 00:00:00',
            'sexo'=>'M',
            'cpf'=>'123.123.123-37',
            'rg'=>'12.123.123-5',
            'telefone1'=>'(19)99389-2925',
            'telefone2'=>'(19)3658-3536',
            'cep'=>'13460-000',
            'rua'=>'Flamboyant',
            'numero'=>'403',
            'complemento'=>'casa',
            'bairro'=>'Alvorada',
            'cidade'=>'Nova Odessa',
            'uf'=>'SP'
        ]);

        DB::table('pessoas')->insert([
            'id'=>'5',
            'nome'=>'Pricila Franco',
            'data_nascimento'=>'2000-01-10 00:00:00',
            'sexo'=>'F',
            'cpf'=>'12312311221',
            'rg'=>'1212312319',
            'telefone1'=>'(19)3154-2925',
            'telefone2'=>'(19)3658-4468',
            'cep'=>'13460-000',
            'rua'=>'Flamboyant',
            'numero'=>'403',
            'complemento'=>'casa',
            'bairro'=>'Alvorada',
            'cidade'=>'Nova Odessa',
            'uf'=>'SP'
        ]);

        DB::table('pessoas')->insert([
            'id'=>'6',
            'nome'=>'Carlos Andrades',
            'data_nascimento'=>'1988-05-30 00:00:00',
            'sexo'=>'M',
            'cpf'=>'121.212.121-22',
            'rg'=>'11.123.121-2',
            'telefone1'=>'(19)3154-3671',
            'telefone2'=>'',
            'cep'=>'13460-000',
            'rua'=>'Guaranta',
            'numero'=>'101',
            'complemento'=>'casa',
            'bairro'=>'Capuava',
            'cidade'=>'Nova Odessa',
            'uf'=>'SP'
        ]);

        DB::table('pessoas')->insert([
            'id'=>'7',
            'nome'=>'Gerson Vasconcelos',
            'data_nascimento'=>'2000-01-10 00:00:00',
            'sexo'=>'M',
            'cpf'=>'354.685.310-96',
            'rg'=>'34.219.345-3',
            'telefone1'=>'(19)99456-3691',
            'telefone2'=>'(19)3658-3536',
            'cep'=>'13460-000',
            'rua'=>'Joaquim Egidio',
            'numero'=>'1432',
            'complemento'=>'Bloco-H Ap-45',
            'bairro'=>'Flores Campos',
            'cidade'=>'Nova Odessa',
            'uf'=>'SP'
        ]);

        DB::table('pessoas')->insert([
            'id'=>'8',
            'nome'=>'Jasmini Teodoro Leite',
            'data_nascimento'=>'1992-07-18 00:00:00',
            'sexo'=>'F',
            'cpf'=>'327.365.945-32',
            'rg'=>'88.632.782-8',
            'telefone1'=>'(19)99534-2879',
            'cep'=>'13460-000',
            'rua'=>'Jandira Almeida',
            'numero'=>'118',
            'bairro'=>'Cascata',
            'cidade'=>'Nova Odessa',
            'uf'=>'SP'
        ]);

        DB::table('pessoas')->insert([
            'id'=>'9',
            'nome'=>'Mariana Jesus Lacerda',
            'data_nascimento'=>'1990-06-24 00:00:00',
            'sexo'=>'F',
            'cpf'=>'327.365.623-78',
            'rg'=>'88.632.318-6',
            'telefone1'=>'(19)99364-3598',
            'cep'=>'13463-458',
            'rua'=>'Pastor Geraldo Teodoro',
            'numero'=>'345',
            'bairro'=>'Jd. Esperança',
            'cidade'=>'Americana',
            'uf'=>'SP'
        ]);
        DB::table('pessoas')->insert([
            'id'=>'10',
            'nome'=>'Vera Costa Melo',
            'data_nascimento'=>'1982-11-28 00:00:00',
            'sexo'=>'F',
            'cpf'=>'327.365.137-36',
            'rg'=>'88.632.237-56',
            'telefone1'=>'(19)99865-3213',
            'cep'=>'13349-654',
            'rua'=>'Camomila',
            'numero'=>'222',
            'bairro'=>'Jd. Nova Era',
            'cidade'=>'Americana',
            'uf'=>'SP'
        ]);
        DB::table('pessoas')->insert([
            'id'=>'11',
            'nome'=>'Fernando Pedro de Alcantara',
            'data_nascimento'=>'1992-07-18 00:00:00',
            'sexo'=>'F',
            'cpf'=>'327.365.778-21',
            'rg'=>'88.632.322-8',
            'telefone1'=>'(19)99539-3679',
            'cep'=>'13460-000',
            'rua'=>'Pascoal Picone',
            'numero'=>'118',
            'bairro'=>'Centro',
            'cidade'=>'Nova Odessa',
            'uf'=>'SP'
        ]);
    }
}
