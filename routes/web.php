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

Route::get('/contacto', function () {
    return view('contacto');
})->name("contacto");

Route::get('blog/{id}', function ($id) {
    return view('blog', ["id"=>$id]);
});

Route::get('blog2/{id}/{nombre}', function ($id, $nombre) {
    return view('blog2',['id'=>$id,'nombre'=>$nombre]);
})->where(array('nombre'=>'[a-zA-Z]+','id'=>'[0-9]+'));
//opcion 2 para patron
Route::pattern('id','[0-9]+');
Route::pattern('nombre','[a-zA-Z]+');

Route::get('/saludo', 'SaludoController@saludo')->name('saludo');
Route::get('/saludoConNombre', 'SaludoController@saludoConNombre')->name('saludoConNombre');

Route::get('/saludo', 'SaludoController@saludo')->name('saludo');
Route::get('/saludonombre/{nombre}', 'SaludoController@saludoNombre')->name('saludoNombre');
Route::get('/saludonombrecolor/{nombre}/{color?}', 'SaludoController@saludoNombreColor')->name('saludoNombreColor');

//----------------tarea 4.3----------------
Route::get('/formulario', 'formController@formulario')->name('formulario');
Route::get('mostrarDatos', 'formController@mostrarDatos')->name('mostrarDatos');

Route::get('formIdiomas', 'formController@mostrarFormIdiomas')->name('formIdiomas');
Route::post('mostrarDatos2', 'formController@mostrarDatos2')->name('mostrarDatos2');

Route::get('formValidacion', 'formController@mostrarFormIdiomas')->name('formValidacion');
Route::post('validacion', 'formController@validacion')->name('validacion');
