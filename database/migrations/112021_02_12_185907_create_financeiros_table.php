<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financeiros', function (Blueprint $table) {
            $table->id();
            $table->dateTime('data_vencimento');
            $table->dateTime('data_pagamento')->nullable();
            $table->string('codigo_barras');
            $table->string('forma_pagamento');
            $table->boolean('status');
            $table->uuid('responsavel_id')->nullable();

            $table->foreign('responsavel_id')->references('id')->on('responsaveis');

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
        Schema::dropIfExists('financeiros');
    }
}
