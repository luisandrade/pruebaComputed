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
    return view('index');
});

Route::get('{any}', 'VeltrixController@index');


// Falta colocar las rutas de autenticacion

 //Users
 Route::get('/usuarios/selectUsuarios', 'UsuarioController@selectUsuarios');
 // Canales
 route::get('/canales','CanalController@index')->name('canales');
 route::post('/canales/registrar','CanalController@store')->name('canales/registrar');
 Route::get('/canales/selectCanales', 'CanalController@selectCanales');
 // Videos
 route::get('/videos','VideoController@index')->name('videos');
 route::get('/videos/listarVideos','VideoController@listarVideo')->name('listarVideos');
 route::post('/videos/registrar','VideoController@store')->name('videos/registrar');
 //Playlist
 route::get('/playlist','PlaylistController@index')->name('playlist');
 route::post('/playlist/registrar','PlaylistController@store')->name('playlist/registrar');