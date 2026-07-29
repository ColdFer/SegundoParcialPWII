<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServicioController;


Route::middleware('guest')->group(function () {

    Route::get('/', [AuthController::class, 'login'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'autenticar'])
        ->name('login.validar');

});


Route::middleware('auth')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');


    Route::get('/servicios', [ServicioController::class, 'index'])
        ->name('servicios.index');


    Route::get('/servicios/create', [ServicioController::class, 'create'])
        ->name('servicios.create');


    Route::post('/servicios', [ServicioController::class, 'store'])
        ->name('servicios.store');

});