<?php

use Dompdf\FrameDecorator\Table;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubredesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subredes', function (Blueprint $table) {
            $table->id();

            $table->int('vlan',10);
            $table->string('rangoInicial',100);
            $table->string('rangoFinal', 100);
            $table->string('gateway',100);
            $table->string('disponible',10);
            $table->string('descripcion',100);
            $table->int('activo',10);
            $table->int('nvlan', 10);


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
        Schema::dropIfExists('subredes');
    }
}
