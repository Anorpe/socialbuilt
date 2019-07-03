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
    return view('welcome');
});


Route::get('/admin', 'HabitanteController@principal');




Route::get('/admin', 'HabitanteController@index');


Route::get('/admin/nuevo', 'HabitanteController@create');
Route::post('/admin/crear','HabitanteController@store');

Route::get('/admin/nuevanoticia', 'HabitanteController@createnoticia');
Route::post('/admin/crearnoticia','HabitanteController@storenoticia');




Route::get('/admin/editar/{habitante}', 'HabitanteController@editar');
Route::put('/admin/update/{habitante}','HabitanteController@update')->name('update');


//Route::get('/usuarios/{idpropiedad}','UserController@show');

//Route::get('/saludo/{name}/{nickname?}', 'WelcomeController');



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');