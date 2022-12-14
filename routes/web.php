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
    return view('index');
});

Route::get('/quemsomos', function () {
    return view('quemsomos');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/produtos', function () {
    return view('produtos');
});

Route::get('/contato','ContatoController@index');

Route::post('/contato/inserir','ContatoController@store');

Route::get('/contato/{idContato}','ContatoController@destroy');

Route::get('/produtos', 'ProdutosController@index');

