<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/registro', function () {
    return view('registro');
})->name('registro');

Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');

Route::get('/catalogo', function () {
    return view('catalogo');
})->name('catalogo');

Route::get('/buscar', function () {
    return view('buscar');
})->name('buscar');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');