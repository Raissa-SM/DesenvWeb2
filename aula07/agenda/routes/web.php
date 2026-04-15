<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('contatos', ContatoController::class);
Route::resource('contatos', ContatoController::class);