<?php

use Illuminate\Database\Seeder;

class MaterialesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('materiales')->insert([
          'nombre' => 'Ficha de trabajo n°1'
      ]);

      DB::table('materiales')->insert([
          'nombre' => 'Ficha de trabajo n°2'
      ]);

      DB::table('materiales')->insert([
          'nombre' => 'Ficha de trabajo n°3'
      ]);

      DB::table('materiales')->insert([
          'nombre' => 'Ficha de trabajo n°4'
      ]);

      DB::table('materiales')->insert([
          'nombre' => 'Ficha de trabajo n°5'
      ]);

    }
}
