<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/produtosAdm','ProductController@verAdmProduto');
Route::get('/produtosAdm','ProductController@verTodosProdutos');
//Rota para Cadastro ///
Route::get('/produtos/cadastrar','ProductController@verForm');
Route::post('/produtos/cadastrar','ProductController@criarProduto');
/// Rota para Udate ///
Route::post('/produtos/atualizar', 'ProductController@updateProduto');
Route::get('/produtos/atualizar/{id?}', 'ProductController@verUpdateProduto');
/// Rota para Deletar ///
Route::get('produtosAdm/{id?}','ProductController@deletarProduto');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
