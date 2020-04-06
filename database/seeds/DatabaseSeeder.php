<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
          ProvinciasTableSeeder::class,
          DistritosTableSeeder::class,
          ColegiosTableSeeder::class,
          MaterialesTableSeeder::class,
          AmbientesTableSeeder::class,
          UsersTableSeeder::class,
        ]);
    }
}
