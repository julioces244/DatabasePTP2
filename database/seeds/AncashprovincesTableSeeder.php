<?php

use Illuminate\Database\Seeder;

class AncashprovincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('ancashprovinces')->insert([
          'idancashprovinces' => 1,
          'nombre' => 'Bolognesi',
          'poblacion' => '24012',
          'casos' => 16,
          'fallecidos' => 0,
          'recuperados' => 0,
      ]);

      DB::table('ancashprovinces')->insert([
          'idancashprovinces' => 2,
          'nombre' => 'Carhuaz',
          'poblacion' => '50007',
          'casos' => 39,
          'fallecidos' => 2,
          'recuperados' => 15,
      ]);

      DB::table('ancashprovinces')->insert([
          'idancashprovinces' => 3,
          'nombre' => 'Casma',
          'poblacion' => '57256',
          'casos' => 154,
          'fallecidos' => 20,
          'recuperados' => 25,
      ]);

      DB::table('ancashprovinces')->insert([
          'idancashprovinces' => 4,
          'nombre' => 'Corongo',
          'poblacion' => '8017',
          'casos' => 16,
          'fallecidos' => 0,
          'recuperados' => 0,
      ]);

      DB::table('ancashprovinces')->insert([
          'idancashprovinces' => 5,
          'nombre' => 'Huaraz',
          'poblacion' => '185276',
          'casos' => 16,
          'fallecidos' => 0,
          'recuperados' => 0,
      ]);

      DB::table('ancashprovinces')->insert([
          'idancashprovinces' => 6,
          'nombre' => 'Huari',
          'poblacion' => '63264',
          'casos' => 16,
          'fallecidos' => 0,
          'recuperados' => 0,
      ]);

      DB::table('ancashprovinces')->insert([
          'idancashprovinces' => 7,
          'nombre' => 'Huarmey',
          'poblacion' => '33066',
          'casos' => 16,
          'fallecidos' => 0,
          'recuperados' => 0,
      ]);

      DB::table('ancashprovinces')->insert([
          'idancashprovinces' => 8,
          'nombre' => 'Huaylas',
          'poblacion' => '56557',
          'casos' => 16,
          'fallecidos' => 0,
          'recuperados' => 0,
      ]);

      DB::table('ancashprovinces')->insert([
          'idancashprovinces' => 9,
          'nombre' => 'Mariscal Luzuriaga',
          'poblacion' => '21787',
          'casos' => 16,
          'fallecidos' => 0,
          'recuperados' => 0,
      ]);

      DB::table('ancashprovinces')->insert([
          'idancashprovinces' => 10,
          'nombre' => 'Pallasca',
          'poblacion' => '24371',
          'casos' => 16,
          'fallecidos' => 0,
          'recuperados' => 0,
      ]);

      DB::table('ancashprovinces')->insert([
          'idancashprovinces' => 11,
          'nombre' => 'Pomabamba',
          'poblacion' => '26675',
          'casos' => 16,
          'fallecidos' => 0,
          'recuperados' => 0,
      ]);

      DB::table('ancashprovinces')->insert([
          'idancashprovinces' => 12,
          'nombre' => 'Recuay',
          'poblacion' => '18085',
          'casos' => 16,
          'fallecidos' => 0,
          'recuperados' => 0,
      ]);

      DB::table('ancashprovinces')->insert([
          'idancashprovinces' => 13,
          'nombre' => 'Santa',
          'poblacion' => '474053',
          'casos' => 16,
          'fallecidos' => 0,
          'recuperados' => 0,
      ]);

      DB::table('ancashprovinces')->insert([
          'idancashprovinces' => 14,
          'nombre' => 'Sihuas',
          'poblacion' => '28630',
          'casos' => 16,
          'fallecidos' => 0,
          'recuperados' => 0,
      ]);

      DB::table('ancashprovinces')->insert([
          'idancashprovinces' => 15,
          'nombre' => 'Yungay',
          'poblacion' => '55769',
          'casos' => 16,
          'fallecidos' => 0,
          'recuperados' => 0,
      ]);

      DB::table('ancashprovinces')->insert([
          'idancashprovinces' => 16,
          'nombre' => 'Aija',
          'poblacion' => '6433',
          'casos' => 16,
          'fallecidos' => 0,
          'recuperados' => 0,
      ]);

      DB::table('ancashprovinces')->insert([
          'idancashprovinces' => 17,
          'nombre' => 'Carlos Fermin',
          'poblacion' => '18496',
          'casos' => 16,
          'fallecidos' => 0,
          'recuperados' => 0,
      ]);

      DB::table('ancashprovinces')->insert([
          'idancashprovinces' => 18,
          'nombre' => 'Ocros',
          'poblacion' => '7224',
          'casos' => 16,
          'fallecidos' => 0,
          'recuperados' => 0,
      ]);

      DB::table('ancashprovinces')->insert([
          'idancashprovinces' => 19,
          'nombre' => 'Antonio Raymondi',
          'poblacion' => '13950',
          'casos' => 16,
          'fallecidos' => 0,
          'recuperados' => 0,
      ]);

      DB::table('ancashprovinces')->insert([
          'idancashprovinces' => 20,
          'nombre' => 'Asunción',
          'poblacion' => '7710',
          'casos' => 16,
          'fallecidos' => 0,
          'recuperados' => 0,
      ]);
    }
}
