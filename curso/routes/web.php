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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'UsuariosController@index');
 Route::get('/users/create', 'UsuariosController@criarUsuario');
Route::post('/users/create', 'UsuariosController@criaUsuario');
Route::get('/users/update/{id}', 'UsuariosController@atualizarUsuario');
Route::post('/users/update', 'UsuariosController@atualizaUsuario');
Route::get('/users/delete/{id}', 'UsuariosController@deletarUsuario');

/* Miguel criando Rota */

Route::get('/users/enviar/{id}', 'UsuariosController@enviarUsuario');


Route::get('/produtos', 'ProdutosController@index');
Route::get('/produtos/criar','ProdutosController@criarProduto');
Route::post('/produtos/criar', 'ProdutosController@criaProduto');

Route::get('/produtos/update/{id}', 'ProdutosController@atualizarProduto');
Route::post('/produtos/update', 'ProdutosController@atualizaProduto');
Route::get('/produtos/delete/{id}', 'ProdutosController@deletarProduto');

