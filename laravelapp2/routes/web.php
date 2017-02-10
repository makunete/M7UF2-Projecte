<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});
//Crear Categoria
Route::get('/categories/crea', "CategoriesController@create");

Route::post('/categories/crea', "CategoriesController@store");
//Mostrar Categorias
Route::get('/categories', "CategoriesController@index");
//Mostrar Categoria concreta
Route::get('/categories/{categories}', "CategoriesController@show");

//Crear Videojuego
Route::get('/videojoc/{videojoc}/crea', "VideojocsController@create");

Route::post('/videojoc/{videojoc}/crea', "VideojocsController@store");

//Mostrar Videojoc concret
Route::get('/videojoc/{videojoc}', "VideojocController@show");

//Esborrar videojoc
Route::get('/videojoc/{videojoc}', "VideojocController@delete");


// Crea una nova venda 
Route::get('/vendes/crea', "VendesController@create");
Route::post('/vendes/crea', "VendesController@store");
//Mostrar vendes general
Route::get('/vendes', "VendesController@index");
// Mostra les vendes d'un videojoc
Route::get('/vendes/{vendes}', "VendesController@show");
// administra vendes
Route::get('/vendes/{vendes}/admin', "VendesController@admin");

