<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAncashprovincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ancashprovinces', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->bigIncrements('idancashprovinces');
          $table->string('nombre');
          $table->double('poblacion');
          $table->double('casos');
          $table->double('fallecidos');
          $table->double('recuperados');
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
        Schema::dropIfExists('ancashprovinces');
    }
}
