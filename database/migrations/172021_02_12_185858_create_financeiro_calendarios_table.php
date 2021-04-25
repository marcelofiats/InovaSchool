<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceiroCalendariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financeiro_calendarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('financeiro_id');
            $table->unsignedInteger('calendario_id');

            $table->foreign('financeiro_id')->references('id')->on('financeiros');
            $table->foreign('calendario_id')->references('id')->on('calendarios');

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
        Schema::dropIfExists('financeiro__calendarios');
    }
}
