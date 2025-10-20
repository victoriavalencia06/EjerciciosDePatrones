<?php

use Illuminate\Support\Facades\Route;
use App\Patterns\Factory\Controllers\FactoryController;
use App\Patterns\Adapter\Controllers\AdapterController;
use App\Patterns\Decorator\Controllers\DecoratorController;
use App\Patterns\Strategy\Controllers\StrategyController;

Route::get('/', function () {
    return view('welcome');
});

// Factory
Route::get('/factory/{nivel}', [FactoryController::class, 'crearPersonaje']);

// Adapter
Route::get('/adapter/{version}/{archivo}', [AdapterController::class, 'abrirArchivo']);

// Decorator
Route::get('/decorator/{tipo}', [DecoratorController::class, 'enviarNotificacion']);

// Strategy
Route::get('/strategy/{tipo}', [StrategyController::class, 'mostrar']);
