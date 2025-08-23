<?php

namespace App\Http\Controllers;

use App\Models\Turno;
use App\Models\User;
use App\Models\Automovil;
use App\Models\Servicio;
use Illuminate\Http\Request;

class TurnoController extends Controller
{
    public function index()
    {
        $turnos = Turno::with(['user','automovil','servicio'])->get();
        return view('turnos.index', compact('turnos'));
    }

    public function create()
    {
        $usuarios = User::all();
        $automoviles = Automovil::all();
        $servicios = Servicio::all();
        return view('turnos.create', compact('usuarios','automoviles','servicios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'hora' => 'required',
            'user_id' => 'required|exists:users,id',
            'automovil_id' => 'required|exists:automoviles,id',
            'servicio_id' => 'required|exists:servicios,id',
        ]);

        Turno::create($request->all());
        return redirect()->route('turnos.index')->with('success', 'Turno creado correctamente');
    }

    public function edit(Turno $turno)
    {
        $usuarios = User::all();
        $automoviles = Automovil::all();
        $servicios = Servicio::all();
        return view('turnos.edit', compact('turno','usuarios','automoviles','servicios'));
    }

    public function update(Request $request, Turno $turno)
    {
        $request->validate([
            'fecha' => 'required|date',
            'hora' => 'required',
            'user_id' => 'required|exists:users,id',
            'automovil_id' => 'required|exists:automoviles,id',
            'servicio_id' => 'required|exists:servicios,id',
        ]);

        $turno->update($request->all());
        return redirect()->route('turnos.index')->with('success', 'Turno actualizado correctamente');
    }

    public function destroy(Turno $turno)
    {
        $turno->delete();
        return redirect()->route('turnos.index')->with('success', 'Turno eliminado correctamente');
    }
}
