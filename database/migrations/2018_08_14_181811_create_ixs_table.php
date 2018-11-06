<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIxsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ixs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_servidor')->references('id')->on('servidores');
            $table->integer('id_servicio')->references('id')->on('servicios');
            $table->integer('id_instancia')->references('id')->on('instancias');
            $table->integer('id_estado')->references('id')->on('estados');
            $table->string('configuracion');
            $table->integer('id_uso')->references('id')->on('usos');
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
        Schema::dropIfExists('ixs');
    }
}
