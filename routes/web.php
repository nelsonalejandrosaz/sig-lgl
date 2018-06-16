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
    Route::get('/estrategico/3','InformesEstrategicosController@informe3_parametros')->name('estrategico.3.parametros');
    Route::post('/estrategico/3','InformesEstrategicosController@informe3')->name('estrategico.3');
    Route::get('/estrategico/4','InformesEstrategicosController@informe4_parametros')->name('estrategico.4.parametros');
    Route::post('/estrategico/4','InformesEstrategicosController@informe4')->name('estrategico.4');
    Route::get('/estrategico/5','InformesEstrategicosController@informe5_parametros')->name('estrategico.5.parametros');
    Route::post('/estrategico/5','InformesEstrategicosController@informe5')->name('estrategico.5');
    /**
     * Rutas de informes tacticos
     */
    Route::get('/tactico/1','InformesTacticosController@informe1_parametros')->name('tactico.1.parametros');
    Route::post('/tactico/1','InformesTacticosController@informe1')->name('tactico.1');
    Route::get('/tactico/2','InformesTacticosController@informe2_parametros')->name('tactico.2.parametros');
    Route::post('/tactico/2','InformesTacticosController@informe2')->name('tactico.2');
    Route::get('/tactico/3','InformesTacticosController@informe3_parametros')->name('tactico.3.parametros');
    Route::post('/tactico/3','InformesTacticosController@informe3')->name('tactico.3');
    Route::get('/tactico/4','InformesTacticosController@informe4_parametros')->name('tactico.4.parametros');
    Route::post('/tactico/4','InformesTacticosController@informe4')->name('tactico.4');
    Route::get('/tactico/5','InformesTacticosController@informe5_parametros')->name('tactico.5.parametros');
    Route::post('/tactico/5','InformesTacticosController@informe5')->name('tactico.5');
    Route::get('/tactico/6','InformesTacticosController@informe6_parametros')->name('tactico.6.parametros');
    Route::post('/tactico/6','InformesTacticosController@informe6')->name('tactico.6');
});
