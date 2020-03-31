<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('distritos', function (Blueprint $table) {

          $table->unsignedBigInteger('provincias_idprovincia')->unsigned();
          $table->foreign('provincias_idprovincia')->references('idprovincia')->on('provincias');

        });


        Schema::table('colegios', function (Blueprint $table) {

          $table->unsignedBigInteger('distritos_iddistrito')->unsigned();
          $table->foreign('distritos_iddistrito')->references('iddistrito')->on('distritos');

        });


        Schema::table('estudiantes', function (Blueprint $table) {

          $table->unsignedBigInteger('colegios_idcolegio')->unsigned();
          $table->foreign('colegios_idcolegio')->references('idcolegio')->on('colegios');

        });


        Schema::table('estudiantes_materiales',function (Blueprint $table) {

          $table->unsignedBigInteger('estudiantes_idestudiantes')->unsigned();
          $table->foreign('estudiantes_idestudiantes')->references('idestudiante')->on('estudiantes');

          $table->unsignedBigInteger('materiales_idmateriales')->unsigned();
          $table->foreign('materiales_idmateriales')->references('idmaterial')->on('materiales');

        });


        Schema::table('ambientes', function (Blueprint $table) {

          $table->unsignedBigInteger('colegios_idcolegio')->unsigned();
          $table->foreign('colegios_idcolegio')->references('idcolegio')->on('colegios');

        });


        Schema::table('instrumentos', function (Blueprint $table) {

          $table->unsignedBigInteger('ambientes_idambiente')->unsigned();
          $table->foreign('ambientes_idambiente')->references('idambiente')->on('ambientes');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
