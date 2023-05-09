<?php

use App\Models\Informacion;
use Illuminate\Support\Facades\Route;

Route::get('/guardar', function (Request $request) {
    $informacion = new Informacion;
    $informacion-> titulo = $request->titulo;
    $informacion-> contenido = $request->contenido;
    $informacion->save();

    return redirect('/')->with('mensaje', 'Informacion agregada correctamente');
})->name('guardar');

Route::get('/', function () {
    return view('inicio');
});
 
Route::get('/agregar', function () {
    return view('agregar');
});

Route::post('/agregar', function () {
    return redirect('/');
})->name('guardar');

Route::get('/informacion', function () {
    $informaciones = App\Models\Informacion::all();
    return view('Informacion', compact('informaciones'));
});



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
