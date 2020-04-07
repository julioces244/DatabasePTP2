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
Route::post('{idestudiante}','AlumnoController@store_estudiante_material')->name('verifymaterial');

Route::get('/export', 'AlumnoController@export');
Route::post('delete_student/{idestudiante}','AlumnoController@destroy')->name('eliminar');
Route::get('/show_student/{idestudiante}','AlumnoController@show');

//Importar instrumentos
Route::get('/archivos', 'InstrumentoController@importinstrumentos');
