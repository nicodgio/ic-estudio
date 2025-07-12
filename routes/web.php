<?php

use Illuminate\Support\Facades\Route;

// Ruta raíz que servirá Home 1
Route::view('/', 'homes.home1');

// Rutas para las demás opciones
Route::view('/home2', 'homes.home2');
Route::view('/home3', 'homes.home3');
