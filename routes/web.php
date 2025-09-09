<?php

use App\Http\Controllers\SaludoCesarController;
use App\Http\Controllers\SaludoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/saludo', [SaludoController::class, 'index']);
Route::get('/saludo_cesar', [SaludoCesarController::class, 'index']);