<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAncashcasosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ancashcasos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('idancashcasos');
            $table->date('fechaingreso')->nullable($value = true);
            $table->double('casos');
            $table->double('fallecidos');
            $table->string('departamento');
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
        Schema::dropIfExists('ancashcasos');
    }
}
