<?php

use Illuminate\Database\Seeder;

class DistritosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('distritos')->insert([
          'nombre' => 'Distrito de Huancano',
          'provincias_idprovincia' => 1,
      ]);
      DB::table('distritos')->insert([
          'nombre' => 'Distrito de Humay',
          'provincias_idprovincia' => 1,
      ]);
      DB::table('distritos')->insert([
          'nombre' => 'Distrito de Independencia (Pisco)',
          'provincias_idprovincia' => 1,
      ]);
      DB::table('distritos')->insert([
          'nombre' => 'Distrito de Paracas',
          'provincias_idprovincia' => 1,
      ]);
      DB::table('distritos')->insert([
          'nombre' => 'Distrito de Pisco',
          'provincias_idprovincia' => 1,
      ]);
      DB::table('distritos')->insert([
          'nombre' => 'Distrito de San Andrés',
          'provincias_idprovincia' => 1,
      ]);
      DB::table('distritos')->insert([
          'nombre' => 'Distrito de San Clemente',
          'provincias_idprovincia' => 1,
      ]);
      DB::table('distritos')->insert([
          'nombre' => 'Distrito de Túpac Amaru Inca',
          'provincias_idprovincia' => 1,
      ]);
    }
}
