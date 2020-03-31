<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          //Si se usa el bigIncrements se debe usar unsignedBigInteger al momento de declarar las llaves foraneas
          //En caso se use solo increments, se debe usar unsignedInteger nada más :)
        Schema::create('estudiantes', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->bigIncrements('idestudiante');
          $table->string('nombres');
          $table->string('apellidos');
          $table->string('sexo');
          $table->date('fec_nac')->nullable($value = true);
          $table->string('dni',8);
          $table->string('grado');
          $table->string('seccion',1);
          $table->string('comentarios',200)->nullable($value = true);
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
        Schema::table('estudiantes', function (Blueprint $table) {
            //
        });
    }
}
