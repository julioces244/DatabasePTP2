<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get_colegios', 'ColegioController@index');

Route::get('/get_colegios/{idcolegio}','AmbienteController@indexbyid');

Route::get('/get_instrumentos/{idambiente}','InstrumentoController@instrumentosporid');
Route::get('/get_instrumentos/{codigoambiente}','InstrumentoController@instrumentospornombre');


Route::post('/login','Auth\LoginController@authenticate')->name('login');
