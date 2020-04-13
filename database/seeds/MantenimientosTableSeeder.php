<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MantenimientosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */



    public function run()
    {
      DB::table('mantenimientos')->insert([
          'idMantenimiento' => 1,
          'flimite' => Carbon::parse('15-04-2020'),
          'colegios_idcolegio' => 1,
      ]);

      DB::table('mantenimientos')->insert([
          'idMantenimiento' => 2,
          'flimite' => Carbon::parse('17-04-2020'),
          'colegios_idcolegio' => 1,
      ]);

      DB::table('mantenimientos')->insert([
          'idMantenimiento' => 3,
          'flimite' => Carbon::parse('20-04-2020'),
          'colegios_idcolegio' => 1,
      ]);

      DB::table('mantenimientos')->insert([
          'idMantenimiento' => 4,
          'flimite' => Carbon::parse('15-04-2020'),
          'colegios_idcolegio' => 2,
      ]);

      DB::table('mantenimientos')->insert([
          'idMantenimiento' => 5,
          'flimite' => Carbon::parse('15-04-2020'),
          'colegios_idcolegio' => 2,
      ]);

      DB::table('mantenimientos')->insert([
          'idMantenimiento' => 6,
          'flimite' => Carbon::parse('15-04-2020'),
          'colegios_idcolegio' => 2,
      ]);

      DB::table('mantenimientos')->insert([
          'idMantenimiento' => 7,
          'flimite' => Carbon::parse('15-04-2020'),
          'colegios_idcolegio' => 3,
      ]);

      DB::table('mantenimientos')->insert([
          'idMantenimiento' => 8,
          'flimite' => Carbon::parse('15-04-2020'),
          'colegios_idcolegio' => 3,
      ]);

      DB::table('mantenimientos')->insert([
          'idMantenimiento' => 9,
          'flimite' => Carbon::parse('15-04-2020'),
          'colegios_idcolegio' => 3,
      ]);
    }
}
