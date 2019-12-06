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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ['as' =>'site.home', 'uses' => "HomeController@index"]);

Route::get('/login', ['as' =>'site.login', 'uses' => "LoginController@index"]);
Route::post('/login/entrar', ['as' =>'site.login.entrar', 'uses' => "LoginController@entrar"]);
Route::post('/login/sair', ['as' =>'site.login.sair', 'uses' => "LoginController@sair"]);

Route::get('/cadastro', ['uses' => "UserController@create"]);
Route::post('/cadastro/salvar', ['uses' => "UserController@store"]);

Route::get('/lista', ['uses' => "ListaController@index"]);
