<?php

use App\Http\Controllers\SaludoCesarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/saludo', [SaludoController::class, 'index']);

Route::get('/saludo_cesar', [SaludoCesarController::class, 'index']);