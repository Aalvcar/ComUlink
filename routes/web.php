<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {
    return view('pantallaPrincipal');
})->name('home');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/login', function () {
    return view('privadas.anuncios');
})->middleware('auth')->name('anuncios');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/telefonos', function () {
    return view('telefonos');
})->name('telefonos');

Route::get('/form/nuevo-usuario', function () {
    return view('formularios.form_nuevo_usuario');
})->name('form-usuario');