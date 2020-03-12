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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homeTemplate', 'ProductController@verhome')->name('verhome');


Auth::routes();


//---------------------   Rota dashboard ----------------//
Route::get('/dashboard', 'ProductController@verDashboard')->middleware('checkuser');

//Rota para Lista Produtos
Route::get('/produtosAdm','ProductController@verAdmProduto');
Route::get('/produtosAdm','ProductController@verTodosProdutos');


Route::get('/produtos/cadastrar','ProductController@verForm');
Route::post('/produtos/cadastrar','ProductController@criarProduto');

Route::post('/produtos/atualizar', 'ProductController@updateProduto');
Route::get('/produtos/atualizar/{id?}', 'ProductController@verUpdateProduto');

Route::get('produtosAdm/{id?}','ProductController@deletarProduto');




///-------------------------- Rota para Usuário ------------------------///

Route::get('/usuariosAdm', 'UsuarioController@verTodosUsuarios');

Route::get('/usuarios/cadastrar', 'UsuarioController@verForm');
Route::post('/usuarios/cadastrar', 'UsuarioController@criarUsuario');
Route::get('/usuariosAdm/{id?}', 'UsuarioController@deletarUsuario');