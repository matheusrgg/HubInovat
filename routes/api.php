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

//----------------- Dados de Produtos ------//

Route::post('/produtos', 'ApiController@store');
Route::get('/produtosdata', 'ApiController@show'); 
Route::get('/produtosdata/{id}', 'ApiController@showbyid');
Route::put('/produtosupdate/{id}', 'ApiController@update');
Route::delete('/produtosdelete/{id}','ApiController@delete');

