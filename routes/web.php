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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/proveedor' , 'ProveedorController@index' );

Route::get('/proveedorcrear' , 'ProveedorController@registrar');
Route::post('/proveedorcrear','ProveedorController@create');
Route::get('/proveedoractualizar/{id}' , 'ProveedorController@update');
Route::get('/proveedoreliminar/{id}','ProveedorController@delete');

