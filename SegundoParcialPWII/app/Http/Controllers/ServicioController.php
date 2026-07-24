<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ServicioController extends Controller
{
    public function index()
    {
        $servicios = Servicio::with('user')->orderBy('created_at', 'desc')->get();

        return view('servicios.index', compact('servicios'));
    }

    public function create()
    {
        return view('servicios.create');
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:100',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
            'duracion_estimada' => 'required|integer|min:1',
            'estado' => 'required|string|max:30',
        ]);

        $datos['user_id'] = Auth::id();

        Servicio::create($datos);

        return redirect('/servicios')->with('success', 'Servicio registrado correctamente.');
    }
}
