<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Insere os dados


Route::post('/produtos', 'ApiController@store');

//Mostra os dados
Route::get('/produtosdata', 'ApiController@show'); 

//Mostra dados individual
Route::get('/produtosdata/{id}', 'ApiController@showbyid');

//Atualizar

Route::put('/produtosupdate/{id}', 'ApiController@update');

// Deletar API

Route::delete('/produtosdelete/{id}','ApiController@delete');