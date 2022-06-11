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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Ruta de vista registrar empresas
Route::get('/registrarEmpresa','Empresas\registrarEmpresas@create')->name('registrarEmpresas.create');

//Ruta de función para registrar empresa
Route::post('/registrarEmpresa1','Empresas\registrarEmpresas@store')->name('registrarEmpresas.store');
//Ruta de función para registrar contacto empresa
Route::post('/registrarEmpresa2','Empresas\registrarEmpresas@store1')->name('registrarContacto.store');

//Ruta ver contactos x id empresa
Route::get('/ver_contacto/{id}','Empresas\registrarEmpresas@show')->name('verContacto.show');

//Ruta actualizar contacto
Route::put('/actualizar_contacto/{id}','Empresas\registrarEmpresas@update')->name('actualizarcontacto.put');

//Ruta Eliminar contacto
Route::delete('/eliminar_contacto/{id}','Empresas\registrarEmpresas@destroy')->name('eliminarcontacto.delete');