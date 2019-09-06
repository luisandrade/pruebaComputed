<?php


Route::get('/', function () {
    return view('index');
});




//Falta colocar las rutas de autenticacion

//Users
  Route::get('/usuarios/selectUsuarios', 'UsuarioController@selectUsuarios');
 //Canales
  route::get('/canales','CanalController@index')->name('canales');
  route::post('/canales/registrar','CanalController@store')->name('canales/registrar');
  Route::get('/canales/selectCanales', 'CanalController@selectCanales');
 //Videos
  route::get('/videos','VideoController@index')->name('videos');
  route::get('/videos/listarVideos','VideoController@listarVideo')->name('listarVideos');
  route::post('/videos/registrar','VideoController@store')->name('videos/registrar');
//Playlist
  route::get('/playlist/listarPlaylist','PlaylistController@index')->name('playlist');
  route::post('/playlist/registrar','PlaylistController@store')->name('playlist/registrar');
  route::delete('/playlist/{id}','PlaylistController@delete');
  route::get('edit/{id}','PlaylistController@edit')->name('playlist_edit');
  route::get('edit/prueba/{id}','PlaylistController@prueba')->name('prueba_edit');

