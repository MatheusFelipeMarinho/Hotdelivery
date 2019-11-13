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

if (!Request::ajax()) {

    Route::get('{any?}', 'SpaController@index')->where('any', '.*');;

}

Route::post('registerNewUser', 'Auth\RegisterNewUserController@insert');

Route::post('api/login', 'Auth\LoginController@login');

Route::post('api/logout', 'Auth\LoginController@logout');

Route::post('api/pessoas/index', 'PessoasController@index');
