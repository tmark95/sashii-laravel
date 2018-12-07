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

Route::get('/home', 'HomeController@show');
Route::get('/login' , 'LoginController@show');
Route::get('/register' ,'RegisterController@show');
Route::get('/perfil', 'PerfilController@show');
Route::get('/start', 'StartController@show');
