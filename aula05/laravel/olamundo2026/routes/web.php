<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;

Route::resource('/contato', ContatoController::class);

Route::get('/sobre', function() {
    return view('sobre');
});

Route::resource('/', HomeController::class);
