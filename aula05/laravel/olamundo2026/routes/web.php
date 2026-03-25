<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::resource('/contato', ContatoController::class);

Route::get('/sobre', function() {
    return view('sobre');
});

Route::get('/', function () {
    return view('welcome');
});
