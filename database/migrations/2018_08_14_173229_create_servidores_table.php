<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServidoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servidores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hostname');
            $table->string('ip');
            $table->string('cpu');
            $table->integer('cores');
            $table->integer('ram');
            $table->integer('disco');
            $table->integer('id_padre');
            $table->integer('version')->references('id')->on('versionn');;
            $table->integer('id_rol')->references('id')->on('roles');
            $table->integer('id_so')->references('id')->on('sistemas_operativos');
            $table->integer('id_tipo')->references('id')->on('tipos');
            $table->integer('id_uso')->references('id')->on('usos');
            $table->string('id_marca')->references('id')->on('marcas');;
            $table->string('id_modelo')->references('id')->on('modelos');;
            $table->string('mac');
            $table->string('serial');
            $table->string('ubicacion');
            $table->string('propietario');
            $table->integer('id_estado')->references('id')->on('estados');
            $table->text('observacion');
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
        Schema::dropIfExists('servidores');
    }
}
