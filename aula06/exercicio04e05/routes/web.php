<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IMCController;
use App\Http\Controllers\SonoController;
use App\Http\Controllers\ViagemController;

Route::get('/imc', [IMCController::class, 'index']);
Route::post('/imc/calcular', [IMCController::class, 'calcular']);
Route::resource('/sono', SonoController::class);
Route::resource('/viagem', ViagemController::class);

Route::resource('/', HomeController::class);