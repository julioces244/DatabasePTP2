<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/all_students', 'AlumnoController@index');


Route::get('/create_student','AlumnoController@create')->name('crear_student');

Route::post('/store_student','AlumnoController@store');
//Route::post('{idestudiante}','AlumnoController@store_estudiante_material')->name('verifymaterial');

Route::get('/export', 'AlumnoController@export');
Route::post('delete_student/{idestudiante}','AlumnoController@destroy')->name('eliminar');
Route::get('/show_student/{idestudiante}','AlumnoController@show');

//Importar instrumentos
Route::get('/archivos', 'InstrumentoController@importinstrumentos');

//Ver mapa provincias
Route::get('/ancash_provincias','MapaController@index');

//Ingresar datos grafica
Route::get('/ingresar_datos','MapaController@ingresardatos');
Route::post('/ancash_graficas','MapaController@store')->name('registrardatos');

Route::get('/ancash_graficas','MapaController@ancash_graficas');
Route::get('/ancash_provincias/{id}/edit','MapaController@show');

Route::put('/actualizar_provincia/{id}','MapaController@update')->name('actualizar_provincia');
Route::get('/exportProvinces', 'MapaController@export');
