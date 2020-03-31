<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('estudiantes')->insert([
          'nombres' => 'ABRIL DE NAZARETH',
          'apellidos' => 'ACEVEDO FERNANDEZ',
          'sexo' => 'Femenino',
          'fec_nac' => '12/02/1995',
          'dni' => '60072401',
      ]);

      DB::table('estudiantes')->insert([
          'nombres' => 'JEANCARLOS SHANDELL',
          'apellidos' => 'AGUIRRE ORMEÑO',
          'sexo' => 'Masculino',
          'fec_nac' => '12/02/1995',
          'dni' => '61041173',
      ]);

      DB::table('estudiantes')->insert([
          'nombres' => 'CESAR JESUS',
          'apellidos' => 'BUSTAMANTE PILLACA',
          'sexo' => 'Masculino',
          'fec_nac' => '12/02/1995',
          'dni' => '19876560',
      ]);

      DB::table('estudiantes')->insert([
          'nombres' => 'JESUS DAVID',
          'apellidos' => 'CARRASCO ORMEÑO',
          'sexo' => 'Masculino',
          'fec_nac' => '12/02/1995',
          'dni' => '61072409',
      ]);

      DB::table('estudiantes')->insert([
          'nombres' => 'XIOMARA ANGELINA',
          'apellidos' => 'CASIA PACHAS',
          'sexo' => 'Femenino',
          'fec_nac' => '12/02/1995',
          'dni' => '60488177',
      ]);


    }
}
