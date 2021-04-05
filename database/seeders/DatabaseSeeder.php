<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Pessoa::class);
        $this->call(User::class);
        $this->call(Diretoria::class);
        $this->call(Professor::class);
        $this->call(Responsavel::class);
        $this->call(Secretaria::class);
        $this->call(Aluno::class);
    }
}
