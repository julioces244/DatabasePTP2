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
          'descripcion' => 'Luis Fajardo - King',
          'flimite' => Carbon::parse('15-04-2020'),
          'colegios_idcolegio' => 1,
      ]);

      DB::table('mantenimientos')->insert([
          'idMantenimiento' => 2,
          'descripcion' => 'Melissa - Fatima - Erika',
          'flimite' => Carbon::parse('17-04-2020'),
          'colegios_idcolegio' => 1,
      ]);

      DB::table('mantenimientos')->insert([
          'idMantenimiento' => 3,
          'descripcion' => 'Gene - Yil',
          'flimite' => Carbon::parse('20-04-2020'),
          'colegios_idcolegio' => 1,
      ]);

      DB::table('mantenimientos')->insert([
          'idMantenimiento' => 4,
          'descripcion' => 'Luis Fajardo - King',
          'flimite' => Carbon::parse('13-04-2020'),
          'colegios_idcolegio' => 2,
      ]);

      DB::table('mantenimientos')->insert([
          'idMantenimiento' => 5,
          'descripcion' => 'Melissa - Fatima - Erika',
          'flimite' => Carbon::parse('14-04-2020'),
          'colegios_idcolegio' => 2,
      ]);

      DB::table('mantenimientos')->insert([
          'idMantenimiento' => 6,
          'descripcion' => 'Gene - Yil',
          'flimite' => Carbon::parse('15-04-2020'),
          'colegios_idcolegio' => 2,
      ]);

      DB::table('mantenimientos')->insert([
          'idMantenimiento' => 7,
          'descripcion' => 'Luis Fajardo - King',
          'flimite' => Carbon::parse('15-04-2020'),
          'colegios_idcolegio' => 3,
      ]);

      DB::table('mantenimientos')->insert([
          'idMantenimiento' => 8,
          'descripcion' => 'Melissa - Fatima - Erika',
          'flimite' => Carbon::parse('16-04-2020'),
          'colegios_idcolegio' => 3,
      ]);

      DB::table('mantenimientos')->insert([
          'idMantenimiento' => 9,
          'descripcion' => 'Gene - Yil',
          'flimite' => Carbon::parse('18-04-2020'),
          'colegios_idcolegio' => 3,
      ]);

      DB::table('mantenimientos')->insert([
          'idMantenimiento' => 10,
          'descripcion' => 'Luis Fajardo - King',
          'flimite' => Carbon::parse('13-04-2020'),
          'colegios_idcolegio' => 4,
      ]);

      DB::table('mantenimientos')->insert([
          'idMantenimiento' => 11,
          'descripcion' => 'Melissa - Fatima - Erika',
          'flimite' => Carbon::parse('16-04-2020'),
          'colegios_idcolegio' => 4,
      ]);

      DB::table('mantenimientos')->insert([
          'idMantenimiento' => 12,
          'descripcion' => 'Gene - Yil',
          'flimite' => Carbon::parse('17-04-2020'),
          'colegios_idcolegio' => 4,
      ]);
    }
}
