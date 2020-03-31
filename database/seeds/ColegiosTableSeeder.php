<?php

use Illuminate\Database\Seeder;

class ColegiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('colegios')->insert([
          'idcolegio' => 1,
          'nombre' => 'BANDERA DEL PERÚ',
          'imagen' => 'images/icons/Bandera_del_Perú.jpg',
          'latitud' => '-13.709627',
          'longitud' => '-76.207343',
          'abreviatura' => 'BP',
          'distritos_iddistrito' => 5,
      ]);

      DB::table('colegios')->insert([
          'idcolegio' => 2,
          'nombre' => 'JOSÉ DE SAN MARTÍN',
          'imagen' => 'images/icons/Jose_de_San_Martin.jpg',
          'latitud' => '-13.717681',
          'longitud' => '-76.217158',
          'abreviatura' => 'JSM',
          'distritos_iddistrito' => 5,
      ]);

      DB::table('colegios')->insert([
          'idcolegio' => 3,
          'nombre' => 'JOSÉ CARLOS MARIÁTEGUI',
          'imagen' => 'images/icons/ic_colegio.png',
          'latitud' => '-13.683041',
          'longitud' => '-76.154683',
          'abreviatura' => 'JCM',
          'distritos_iddistrito' => 7,
      ]);

      DB::table('colegios')->insert([
          'idcolegio' => 4,
          'nombre' => 'JOSÉ ABELARDO QUIÑONES GONZALES',
          'imagen' => 'images/icons/Jose_Abelardo_Quiñones.jpg',
          'latitud' => '',
          'longitud' => '',
          'abreviatura' => 'JQG',
          'distritos_iddistrito' => 6,
      ]);

      DB::table('colegios')->insert([
          'idcolegio' => 5,
          'nombre' => 'RAUL PORRAS BARRENECHEA',
          'imagen' => 'images/icons/Raul_Porras_Barrenechea.jpg',
          'latitud' => '-13.713474',
          'longitud' => '-76.197473',
          'abreviatura' => 'RPB',
          'distritos_iddistrito' => 5,
      ]);

      DB::table('colegios')->insert([
          'idcolegio' => 6,
          'nombre' => 'INDEPENDENCIA',
          'imagen' => 'images/icons/Independencia.jpg',
          'latitud' => '-13.693626',
          'longitud' => '-76.026384',
          'abreviatura' => 'I',
          'distritos_iddistrito' => 3,
      ]);

      DB::table('colegios')->insert([
          'idcolegio' => 7,
          'nombre' => 'RENAN ELIAS OLIVERA',
          'imagen' => 'images/icons/ic_colegio.png',
          'latitud' => '',
          'longitud' => '',
          'abreviatura' => 'REO',
          'distritos_iddistrito' => 6,
      ]);

      //asdawd San Clemente
      DB::table('colegios')->insert([
          'idcolegio' => 8,
          'nombre' => 'MARIA PARADO DE BELLIDO',
          'imagen' => 'images/icons/Maria_Parado_de_Bellido.jpg',
          'latitud' => '',
          'longitud' => '',
          'abreviatura' => 'MPB',
          'distritos_iddistrito' => 7,
      ]);

      //adwa Pisco
      DB::table('colegios')->insert([
          'idcolegio' => 9,
          'nombre' => 'MIGUEL GRAU SEMINARIO',
          'imagen' => 'images/icons/Miguel_Grau_Seminario.jpg',
          'latitud' => '',
          'longitud' => '',
          'abreviatura' => 'MGS',
          'distritos_iddistrito' => 5,
      ]);

      //adwda Independencia
      DB::table('colegios')->insert([
          'idcolegio' => 10,
          'nombre' => 'GERARDO MENDOZA ESCATE',
          'imagen' => 'images/icons/Gerardo_Mendoza_Escate.png',
          'latitud' => '',
          'longitud' => '',
          'abreviatura' => 'GME',
          'distritos_iddistrito' => 3,
      ]);

      DB::table('colegios')->insert([
          'idcolegio' => 11,
          'nombre' => 'FE Y ALEGRIA 77',
          'imagen' => 'images/icons/ic_colegio.png',
          'latitud' => '-13.715412',
          'longitud' => '-76.173966',
          'abreviatura' => 'FA',
          'distritos_iddistrito' => 8,
      ]);

      DB::table('colegios')->insert([
          'idcolegio' => 12,
          'nombre' => 'JUAN VELASCO ALVARADO',
          'imagen' => 'images/icons/Juan_Velazco_Alvarado.jpg',
          'latitud' => '',
          'longitud' => '',
          'abreviatura' => 'JVA',
          'distritos_iddistrito' => 2,
      ]);

      DB::table('colegios')->insert([
          'idcolegio' => 13,
          'nombre' => 'BEATITA DE HUMAY',
          'imagen' => 'images/icons/Beatita_de_Humay.jpg',
          'latitud' => '',
          'longitud' => '',
          'abreviatura' => 'BH',
          'distritos_iddistrito' => 2,
      ]);

      //dawdad San Andres
      DB::table('colegios')->insert([
          'idcolegio' => 14,
          'nombre' => 'LÁZARO ORREGO MORALES',
          'imagen' => 'images/icons/ic_colegio.png',
          'latitud' => '',
          'longitud' => '',
          'abreviatura' => 'LOM',
          'distritos_iddistrito' => 6,
      ]);

      DB::table('colegios')->insert([
          'idcolegio' => 15,
          'nombre' => 'PORSIA SENISSE DE ARRIOLA',
          'imagen' => 'images/icons/Porsia_Senisse_de_Arriola.jpg',
          'latitud' => '',
          'longitud' => '',
          'abreviatura' => 'PSA',
          'distritos_iddistrito' => 1,
      ]);

      //adaw Huancano
      DB::table('colegios')->insert([
          'idcolegio' => 16,
          'nombre' => 'ANDRES AVELINO CÁCERES',
          'imagen' => 'images/icons/Andres_Avelino_Caceres.jpg',
          'latitud' => '',
          'longitud' => '',
          'abreviatura' => 'AAC',
          'distritos_iddistrito' => 1,
      ]);

      //adsaw Paracas
      DB::table('colegios')->insert([
          'idcolegio' => 17,
          'nombre' => 'PARACAS 22489',
          'imagen' => 'images/icons/ic_colegio.png',
          'latitud' => '',
          'longitud' => '',
          'abreviatura' => 'P',
          'distritos_iddistrito' => 4,
      ]);

      DB::table('colegios')->insert([
          'idcolegio' => 18,
          'nombre' => 'CARLOS NORIEGA JIMENEZ',
          'imagen' => 'images/icons/Carlos_Noriega_Jimenez.jpg',
          'latitud' => '',
          'longitud' => '',
          'abreviatura' => 'CNJ',
          'distritos_iddistrito' => 4,
      ]);
    }
}
