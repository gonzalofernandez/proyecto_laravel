<?php

use Illuminate\Http\Request;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/
//Rutas para el uso de las tablas de la BBDD
Route::resource('categorias','CategoriasController');
Route::resource('categorias.productos', 'ProductosController');
Route::resource('users','UsersController');
