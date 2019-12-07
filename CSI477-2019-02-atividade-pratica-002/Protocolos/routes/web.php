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

Route::get('/home',['as'=>'site.home','uses'=>'HomeController@index']);

Route::get('/login',['as'=>'site.login','uses'=>'LoginController@index']);
Route::post('/login/entrar',['as'=>'site.login.entrar','uses'=>'LoginController@entrar']);
Route::post('/login/sair',['as'=>'site.login.sair','uses'=>'LoginController@sair']);

Route::get('/cadastro',['as'=>'site.cadastro','uses'=>'CadastroController@index']);
Route::post('/cadastro/salvar',['as'=>'site.cadastro.salvar','uses'=>'CadastroController@store']);

Route::get('/criarProtocolo',['as'=>'site.criarProtocolo','uses'=>'ProtocoloController@criar']);
Route::post('/criarProtocolos',['as'=>'site.criarProtocolo.cadastrar','uses'=>'ProtocoloController@store']);

Route::get('/listarProtocolos',['as'=>'site.listarProtocolo','uses'=>'ProtocoloController@listar']);

Route::get('/requisitarProtocolos',['as'=>'site.requisitarProtocolo','uses'=>'ProtocoloController@requisitar']);
Route::post('/requisitarProtocolosAcao',['as'=>'site.requisitarProtocoloAcao','uses'=>'ProtocoloController@requisitarAcao']);

Route::get('/requisitarProtocolos',['as'=>'site.requisitarProtocolo','uses'=>'ProtocoloController@requisitar']);

