<?php

use Illuminate\Database\Seeder;

class ProvinciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('provincias')->insert([
          'idprovincia' => 1,
          'nombre' => 'Pisco',
      ]);
    }
}
