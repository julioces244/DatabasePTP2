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
            'codigo' => 'LC1_JSM',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '18',
            'colegios_idcolegio' => 2,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 2,
            'codigo' => 'LC2_JSM',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '18',
            'colegios_idcolegio' => 2,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 3,
            'codigo' => 'LC_BP',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '36',
            'colegios_idcolegio' => 1,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 4,
            'codigo' => 'LC_RPB',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '31',
            'colegios_idcolegio' => 5,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 5,
            'codigo' => 'LC_FA',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '31',
            'colegios_idcolegio' => 11,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 6,
            'codigo' => 'LC_BH',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '36',
            'colegios_idcolegio' => 13,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 7,
            'codigo' => 'LC_JCM',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '31',
            'colegios_idcolegio' => 3,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 8,
            'codigo' => 'LC_JQG',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '31',
            'colegios_idcolegio' => 4,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 9,
            'codigo' => 'LC_REO',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '31',
            'colegios_idcolegio' => 7,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 10,
            'codigo' => 'LC_I',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '26',
            'colegios_idcolegio' => 6,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 11,
            'codigo' => 'LC_JVA',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '35',
            'colegios_idcolegio' => 12,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 12,
            'codigo' => 'LC_CNJ',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '31',
            'colegios_idcolegio' => 18,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 13,
            'codigo' => 'LC_PSA',
            'nombre' => 'Laboratorio de Computo',
            'ncomputadoras' => '17',
            'colegios_idcolegio' => 15,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 14,
            'codigo' => 'LPT_JSM',
            'nombre' => 'Laboratorio de Tecnología',
            'ncomputadoras' => '1',
            'colegios_idcolegio' => 2,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 15,
            'codigo' => 'LPT_BP',
            'nombre' => 'Laboratorio de Tecnología',
            'ncomputadoras' => '1',
            'colegios_idcolegio' => 1,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 16,
            'codigo' => 'LPT_RPB',
            'nombre' => 'Laboratorio de Tecnología',
            'ncomputadoras' => '1',
            'colegios_idcolegio' => 5,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 17,
            'codigo' => 'LPT_JCM',
            'nombre' => 'Laboratorio de Tecnología',
            'ncomputadoras' => '1',
            'colegios_idcolegio' => 3,
        ]);

        DB::table('ambientes')->insert([
            'idambiente' => 18,
            'codigo' => 'LPT_JVA',
            'nombre' => 'Laboratorio de Tecnología',
            'ncomputadoras' => '1',
            'colegios_idcolegio' => 12,
        ]);


    }
}
