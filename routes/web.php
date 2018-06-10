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

Route::group(['middleware' => 'auth'], function () {
    /**
     * Rutas para usuarios
     */
    Route::resource('usuario','UsuarioController');
    /**
     * Rutas de los informes estrategicos
     */
    Route::get('/estrategico/1','InformesEstrategicosController@informe1_parametros')->name('estrategico.1.parametros');
    Route::post('/estrategico/1','InformesEstrategicosController@informe1')->name('estrategico.1');
    Route::get('/estrategico/2','InformesEstrategicosController@informe2_parametros')->name('estrategico.2.parametros');
    Route::post('/estrategico/2','InformesEstrategicosController@informe2')->name('estrategico.2');
});
