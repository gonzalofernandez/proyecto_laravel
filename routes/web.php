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

//Rutas de HomeController
Route::get('/', 'HomeController@index');
Route::get('/buscar', 'HomeController@buscar');
Route::get('/privacidad', 'HomeController@legal');
Route::get('/condicionesuso', 'HomeController@legal');
Route::get('/condicionesventa', 'HomeController@legal');
Route::get('/derechos', 'HomeController@legal');

//Otras rutas
Route::get('/categorias/{categoria}/filtrar', 'CategoriasController@filtrar');
Route::get('/verificacion/{confirm_token}', 'UsersController@confirmRegister');
