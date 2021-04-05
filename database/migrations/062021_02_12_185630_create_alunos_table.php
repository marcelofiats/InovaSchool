<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('rg')->nullable();
            $table->date('data_nascimento');
            $table->char('sexo');
            $table->string('status');

            $table->uuid('responsavel_id');
            $table->foreign('responsavel_id')->references('id')->on('responsaveis');

            $table->unsignedBigInteger('matricula_id')->nullable();
            $table->foreign('matricula_id')->references('id')->on('matriculas');

            $table->softDeletes();
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
        Schema::dropIfExists('alunos');
    }
}
