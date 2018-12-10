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

Route::get('/', function () {
    return view('start');
});

Route::get('/', 'StartController@show');
Route::get('/login' , 'LoginController@show');
Route::get('/register' ,'RegisterController@show');
Route::get('/perfil', 'PerfilController@show');
Route::get('/start', 'StartController@show');
Route::get('/elmenu', 'MenuController@show');

Route::post('register', ['as' => 'register', 'uses' => 'RegisterController@save_data']);
Auth::routes();
Route::get('/header', 'HeaderController@show')->name('header');
Route::get('/vegetarianos', 'ProductosController@show')

