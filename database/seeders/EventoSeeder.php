<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eventos')->insert([
            [
                'titulo' => 'Reunião de Pais',
                'inicio' => '2021-04-29',
                'termino' => '2021-04-30',
                'descricao' => 'reuniao de pais e mestres'
            ],
            [
                'titulo' => 'Reunião Festa Junina',
                'inicio' => '2021-05-07',
                'termino' => '2021-05-08',
                'descricao' => 'Grandiosa festa junina beneficiente'
            ],
        ]);
    }
}
