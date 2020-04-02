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

Route::resource('/posts', 'PostController');

// Route::post('posts', 'PostController@store')->name('posts.index');
Route::get('/', function () {
    return view('auth/login');
});


//utilizo el metodo de resource por q laravel entiende q con este metodo agrupa 
// index , show ,edit, update, destroy.!!  

Route::resource('almacen/categoria','CategoriaController');
Route::resource('almacen/articulo','ArticuloController');
Route::resource('ventas/cliente','ClienteController');
Route::resource('almacen/compras/proveedor', 'ProveedoresController');
Route::resource('almacen/compras/ingreso', 'IngresoController');
Route::resource('ventas/venta','VentaController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
 
Route::post('/home', 'HomeController@index')->name('home');

Route::get('/aboutUs', function ()
{
    return view('aboutus');
});

Route::get('/faqs', function ()
{
    return view('faqs');
});
