<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return "<h1>Pantalla principal</h1>";
});*/

Route::get('/login', function () {
    return "<h1>Login usuario</h1>";
});

Route::get('/logout', function () {
    return "<h1>Logout usuario</h1>";
});

Route::get('/catalog', function () {
    return "<h1>Listado películas</h1>";
});

Route::get('/catalog/show/{id}', function ($id) {
    return "<h1>Vista detalle pélicula ".$id."</h1>";
});

Route::get('/catalog/create', function () {
    return "<h1>Añadir película</h1>";
});

Route::get('/catalog/edit/{id}', function ($id) {
    return "<h1>Modificar pélicula ".$id."</h1>";
});

Route::get('/', function()
{
return view('home', array('nombre' => 'Usuario2022'));
});
