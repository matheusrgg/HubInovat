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



//Rota dashboard
Route::get('/dashboard', 'ProductController@verDashboard');

//Rota para Lista Produtos
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

//Rota criada para autentificação ///
Route::get('/home', 'HomeController@index')->name('home');

/// Rota para o template da Home ///

Route::get('/homeTemplate', 'ProductController@verhome')->name('verhome');