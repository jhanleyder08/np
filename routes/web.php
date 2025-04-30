<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NosotrosController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros');

// Ruta para el Sistema de Gestión Documental Electrónico de Archivo
Route::get('/sgdea', function () {
    return view('sgdea.upload');
})->name('sgdea.upload');

// Ruta de prueba
Route::get('/test', function () {
    return 'Laravel is working!';
});
