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
Route::middleware(['auth'])->group(function () {
Route::get('/dashboard', 'AutenticacaoController@privada')->name('dashboard');
Route::get('/usuarios', 'UsuarioController@listar')->name('listar');
Route::get('/usuarios/{id}/editar', 'UsuarioController@editar')->name('editar');
Route::post('/usuarios/{id}/atualizar', 'UsuarioController@atualizar')-> name('atualizar');
});

Route::get('/', 'AutenticacaoController@home')->name('home');
Route::get('/login', 'AutenticacaoController@login')->name('login');
Route::post('/logar', 'AutenticacaoController@logar')->name('logar');
Route::get('/logout', 'AutenticacaoController@logout')->name('logout');

//rota para usuarios
Route::get('/registrar', 'UsuarioController@registrar')->name('registrar');
Route::post('/salvar', 'UsuarioController@salvar')->name('salvar');