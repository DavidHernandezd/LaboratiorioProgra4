<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformacionController;

Route::get('/', function () {
    return view('inicio');
});



Route::get('/informacion', [InformacionController::class, 'index']);

Route::get('/agregar', [InformacionController::class, 'create'])->name('create');


Route::post('/agregar', [InformacionController::class, 'store'])->name('guardar');

