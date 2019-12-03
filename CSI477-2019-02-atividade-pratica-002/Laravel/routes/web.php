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

Route::get('/login', ['uses' => "LoginController@index"]);
Route::get('/cadastro', ['uses' => "CadastroController@index"]);
Route::get('/lista', ['uses' => "ListaController@index"]);