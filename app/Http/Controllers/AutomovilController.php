<?php

namespace App\Http\Controllers;

use App\Models\Automovil;
use App\Models\User;
use Illuminate\Http\Request;

class AutomovilController extends Controller
{
    public function index()
    {
        $automoviles = Automovil::with('user')->get();
        return view('automoviles.index', compact('automoviles'));
    }

    public function create()
    {
        $usuarios = User::all();
        return view('automoviles.create', compact('usuarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'anio' => 'required|integer',
            'patente' => 'required|string|unique:automoviles',
            'user_id' => 'required|exists:users,id'
        ]);

        Automovil::create($request->all());
        return redirect()->route('automoviles.index')->with('success', 'Automóvil agregado correctamente.');
    }

    public function edit(Automovil $automovil)
    {
        $usuarios = User::all();
        return view('automoviles.edit', compact('automovil', 'usuarios'));
    }

    public function update(Request $request, Automovil $automovil)
    {
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'anio' => 'required|integer',
            'patente' => 'required|string|unique:automoviles,patente,'.$automovil->id,
            'user_id' => 'required|exists:users,id'
        ]);

        $automovil->update($request->all());
        return redirect()->route('automoviles.index')->with('success', 'Automóvil actualizado correctamente.');
    }

    public function destroy(Automovil $automovil)
    {
        $automovil->delete();
        return redirect()->route('automoviles.index')->with('success', 'Automóvil eliminado correctamente.');
    }
}
