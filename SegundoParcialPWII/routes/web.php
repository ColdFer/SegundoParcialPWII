<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServicioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'autenticar']);

Route::post('/logout', [AuthController::class, 'logout']);