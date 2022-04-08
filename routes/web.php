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

Route::post('/registrarEmpresa1','Empresas\registrarEmpresas@store')->name('registrarEmpresas.store');