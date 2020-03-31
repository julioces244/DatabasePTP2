<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColegiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colegios', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->bigIncrements('idcolegio');
          $table->string('nombre');
          $table->string('imagen')->nullable();
          $table->string('latitud');
          $table->string('longitud');
          $table->string('abreviatura')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colegios');
    }
}
