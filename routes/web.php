<?php

use Illuminate\Support\Facades\Route;
use App\Patterns\Factory\Controllers\FactoryController;

Route::get('/', function () {
    return view('welcome');
});

// Factory
Route::get('/factory/{nivel}', [FactoryController::class, 'crearPersonaje']);
