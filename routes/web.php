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
Route::get('/noticias', function () {
    return view('noticias');
});

//utilizo el metodo de resource por q laravel entiende q con este metodo agrupa 
// index , show ,edit, update, destroy.!!  
Route::resource('almacen/categoria','CategoriaController');
Route::resource('almacen/articulo','ArticuloController');
Route::resource('ventas/cliente','ClienteController');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/aboutUs', function ()
{
    return view('aboutus');
});
Route::get('/faqs', function ()
{
    return view('faqs');
});