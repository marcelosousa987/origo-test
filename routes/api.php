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

Route::get('clientes', 'ApiController@TodosClientes');
Route::get('planos', 'ApiController@TodosPlanos');
Route::get('planos/cliente/{id}', 'ApiController@PegarPlanoCliente');
Route::get('clientes/{id}', 'ApiController@PegarCliente');


Route::post('clientes', 'ApiController@CriarCliente');

Route::put('clientes/{id}', 'ApiController@AtualizarCliente');
Route::delete('cliente/deletar/{id}','ApiController@DeletarCliente');
