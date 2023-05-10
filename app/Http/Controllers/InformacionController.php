<?php

namespace App\Http\Controllers;

use App\Models\Informacion;
use Illuminate\Http\Request;

class InformacionController extends Controller
{
    public function index()
    {
        $informacions = Informacion::all();
        return view('informacion', ['informacions' => $informacions]);
    }
    


    public function create()
    {
        return view('agregar');
    }

    public function store(Request $request)
    {
        $informacion = new Informacion;
        $informacion->titulo = $request->titulo;
        $informacion->contenido = $request->contenido;
        $informacion->save();
    
        return redirect('/informacion')->with('mensaje', 'Información agregada correctamente');
    }
    
}
