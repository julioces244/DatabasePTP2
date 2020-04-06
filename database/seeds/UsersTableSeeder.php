<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'idUser' => 1,
          'name' => 'Luis',
          'lastname' => 'Fajardo',
          'email' => 'luisfajardo'
          'codigo' => '100500',
          'password' => Hash::make('ccd2019'),
      ]);

      DB::table('users')->insert([
          'idUser' => 2,
          'name' => 'Melissa',
          'lastname' => 'Sanchez',
          'email' => 'melissasanchez'
          'codigo' => '100600',
          'password' => Hash::make('ccd2019'),
      ]);

      DB::table('users')->insert([
          'idUser' => 1,
          'name' => 'Gene',
          'lastname' => 'Olarte',
          'email' => 'geneolarte'
          'codigo' => '100700',
          'password' => Hash::make('ccd2019'),
      ]);

    }
}
