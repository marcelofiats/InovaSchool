<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoletimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boletims', function (Blueprint $table) {
            $table->id();
            $table->boolean('calendario_frequencia')->nullable();
            $table->double('nota_1')->nullable();
            $table->double('nota_2')->nullable();
            $table->double('nota_3')->nullable();
            $table->double('nota_4')->nullable();
            $table->unsignedInteger('aluno_id')->nullable();

            $table->foreign('aluno_id')->references('id')->on('alunos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boletims');
    }
}
