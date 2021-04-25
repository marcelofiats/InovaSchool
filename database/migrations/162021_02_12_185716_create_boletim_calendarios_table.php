<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoletimCalendariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boletim_calendarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('boletim_id');
            $table->unsignedInteger('calendario_id');

            $table->foreign('boletim_id')->references('id')->on('boletins');
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
        Schema::dropIfExists('boletim__calendarios');
    }
}
