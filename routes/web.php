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

Route::get('/home', 'App\Http\Controllers\HomeController@homeController')->name('home');
Route::get('/listarcliente', 'App\Http\Controllers\ListarController@listarCliente')->name('listar.cliente');
Route::get('/listarveiculo', 'App\Http\Controllers\ListarController@listarVeiculo')->name('listar.veiculo');

Route::get('/cadastarcliente', 'App\Http\Controllers\CadastroController@cadastroCliente')->name('cadastro.cliente');
Route::get('/cadastrarveiculo', 'App\Http\Controllers\CadastroController@cadastroVeiculo')->name('cadastro.veiculo');
Route::post('/salvarcliente', 'App\Http\Controllers\CadastroController@salvarCliente')->name('salvar.cliente');
Route::post('/salvarveiculo', 'App\Http\Controllers\mCadastroController@salvarVeiculo')->name('salvar.veiculo');