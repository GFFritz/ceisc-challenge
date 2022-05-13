<?php
Auth::routes();

Route::get('/posts/novo', 'PostsController@novo');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/postagem/{id}', 'PublicController@postagem');
Route::get('/', 'PublicController@index');

// Novas rotas
Route::get('/edit/{id}', 'PostsController@edit');
Route::get('/update', 'PostsController@update');
Route::get('/delete/{id}', 'PostsController@destroy');
Route::get('/activate/{id}', 'PostsController@activate');
Route::post('/upload', 'ImageController@upload');
Route::get('/publicar', 'PostsController@store');
Route::post('/delete-image/', 'ImageController@destroy');
