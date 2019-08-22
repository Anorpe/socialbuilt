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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@principal');






Route::get('/admin/nuevo', 'HabitanteController@create');
Route::post('/admin/crear','HabitanteController@store');

Route::get('/admin/editar/{user}', 'HabitanteController@editar');
Route::put('/admin/update/{user}','HabitanteController@update')->name('update');

Route::get('/user/editar', 'HabitanteController@editarclave');
Route::put('/user/update/{user}','HabitanteController@updateclave')->name('updateclave');

Route::get('/admin/consultar/','HabitanteController@query');
Route::post('/admin/show','HabitanteController@show');
Route::get('/admin/show/{habitante}','HabitanteController@mostrar');




Route::get('/admin/nuevanoticia', 'NoticiaController@create');
Route::post('/admin/crearnoticia','NoticiaController@store');

//Estas dos están repetidas?

Route::get('/admin/nuevanoticia', 'NoticiaController@create');
Route::post('/admin/crearnoticia','NoticiaController@store');


Route::get('/admin/nuevanotificacion', 'NotificacionController@createadmin');
Route::post('/admin/crearnotificacion','NotificacionController@storeadmin');

Route::get('/user/nuevanotificacion', 'NotificacionController@createuser');
Route::post('/user/crearnotificacion','NotificacionController@storeuser');


Route::get('/admin/shownotificacion', 'NotificacionController@showadmin');
Route::get('/user/shownotificacion', 'NotificacionController@showuser');

