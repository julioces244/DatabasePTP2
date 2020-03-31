<?php

use Illuminate\Database\Seeder;

class AmbientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ambientes')->insert([
            'idambiente' => 1,
            'codigo' => 'LC1',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '18',
            'colegios_idcolegio' => 2,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 2,
            'codigo' => 'LC2',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '18',
            'colegios_idcolegio' => 2,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 3,
            'codigo' => 'LC3',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '36',
            'colegios_idcolegio' => 1,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 4,
            'codigo' => 'LC4',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '31',
            'colegios_idcolegio' => 5,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 5,
            'codigo' => 'LC5',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '31',
            'colegios_idcolegio' => 11,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 6,
            'codigo' => 'LC6',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '36',
            'colegios_idcolegio' => 13,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 7,
            'codigo' => 'LC7',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '31',
            'colegios_idcolegio' => 3,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 8,
            'codigo' => 'LC8',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '31',
            'colegios_idcolegio' => 4,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 9,
            'codigo' => 'LC9',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '31',
            'colegios_idcolegio' => 7,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 10,
            'codigo' => 'LC10',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '26',
            'colegios_idcolegio' => 6,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 11,
            'codigo' => 'LC11',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '35',
            'colegios_idcolegio' => 12,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 12,
            'codigo' => 'LC12',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '31',
            'colegios_idcolegio' => 18,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 13,
            'codigo' => 'LC13',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '17',
            'colegios_idcolegio' => 15,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 14,
            'codigo' => 'LPT1',
            'nombre' => 'Laboratorio de Tecnología',
            'ncomputadoras' => '1',
            'colegios_idcolegio' => 2,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 15,
            'codigo' => 'LPT2',
            'nombre' => 'Laboratorio de Tecnología',
            'ncomputadoras' => '1',
            'colegios_idcolegio' => 1,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 16,
            'codigo' => 'LPT3',
            'nombre' => 'Laboratorio de Tecnología',
            'ncomputadoras' => '1',
            'colegios_idcolegio' => 5,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 17,
            'codigo' => 'LPT4',
            'nombre' => 'Laboratorio de Tecnología',
            'ncomputadoras' => '1',
            'colegios_idcolegio' => 3,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 18,
            'codigo' => 'LPT5',
            'nombre' => 'Laboratorio de Tecnología',
            'ncomputadoras' => '1',
            'colegios_idcolegio' => 12,
        ]);


    }
}
