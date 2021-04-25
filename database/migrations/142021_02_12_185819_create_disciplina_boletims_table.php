<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisciplinaBoletimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplina_boletims', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('disciplina_id');
            $table->unsignedInteger('boletim_id');

            $table->foreign('disciplina_id')->references('id')->on('disciplinas');
            $table->foreign('boletim_id')->references('id')->on('boletins');

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
        Schema::dropIfExists('disciplina__boletims');
    }
}
