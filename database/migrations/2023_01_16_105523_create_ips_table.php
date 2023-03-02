<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ips', function (Blueprint $table) {
            $table->id();

            $table->string('ip', 100);

            $table->unsignedBigInteger('Subred_id');
            $table->unsignedBigInteger('id_equipo');
            $table->string('ocupada',20);
            $table->int('activo',10)->default(1);
            $table->timestamps();

            $table->foreign('Subred_id')->references('id')->on('subredes');
            $table->foreign('id_equipo')->references('id')->on('equipos');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ips');
    }
}
