<?php

use Illuminate\Support\Facades\Route;
use App\Patterns\Factory\Controllers\FactoryController;
use App\Patterns\Adapter\Controllers\AdapterController;

Route::get('/', function () {
    return view('welcome');
});

// Factory
Route::get('/factory/{nivel}', [FactoryController::class, 'crearPersonaje']);

// Adapter
Route::get('/adapter/{version}/{archivo}', [AdapterController::class, 'abrirArchivo']);