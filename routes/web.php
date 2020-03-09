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



Route::get('/produtos/cadastrar','ProductController@verForm');
Route::post('/produtos/cadastrar','ProductController@criarProduto');
Route::get('/produtosAdm','ProductController@verAdmProduto');
Route::get('/produtosAdm','ProductController@verTodosProdutos');