<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {
    return view('pantallaPrincipal');
})->name('home');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/login', function () {
    return view('anuncios');
})->middleware('auth')->name('anuncios');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/about', function () {
    return view('about');
})->name('about');
