<?php

use App\Http\Middleware\PrimeiroMiddleware;

Route::get('/usuarios', 'UsuarioControlador@index')
->middleware('primeiro', 'segundo');

Route::get('/terceiro', function(){
    return 'passou pelo terceiro middleware';
})->middleware('terceiro:Joao,20');