<?php

use Illuminate\Database\Seeder;

class InstrumentosTableSeeder extends Seeder
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
    }
}
