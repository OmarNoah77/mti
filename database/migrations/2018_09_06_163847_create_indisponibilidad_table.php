<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndisponibilidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indisponibilidad', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_indisponibilidad');
            $table->integer('servidor')->references('id')->on('servidores');
            $table->integer('instancia')->references('id')->on('instancias');
            $table->text('nivel');
            $table->text('descripcion');
            $table->time('hora_inicio');
            $table->time('hora_final');
            $table->time('tiempo_total');
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
        Schema::dropIfExists('indisponibilidad');
    }
}
