<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstrumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instrumentos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('idinstrumento');
            $table->string('especialidad')->nullable();
            $table->integer('cantidad')->nullable();
            $table->string('unidades')->nullable();
            $table->string('descripcion');
            $table->string('serie')->nullable();
            $table->string('codigoptp')->nullable();
            $table->string('codigo')->nullable();
            $table->string('estado')->nullable();
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
        Schema::dropIfExists('instrumentos');
    }
}
