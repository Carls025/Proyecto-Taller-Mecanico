<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\User;
use App\Models\Automovil;
use App\Models\Turno;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {
        $servicios = Servicio::with(['turnos.user', 'turnos.automovil'])->get();
        return view('servicios.index', compact('servicios'));
    }

    public function create()
    {
        $usuarios = User::all();
        $automoviles = Automovil::all();
        return view('servicios.create', compact('usuarios', 'automoviles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'user_id' => 'required|exists:users,id',
            'automovil_id' => 'required|exists:automoviles,id',
        ]);

        // 1. Crear el servicio
        $servicio = Servicio::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
        ]);

        // 2. Crear el turno asociado
        Turno::create([
            'fecha' => now()->toDateString(),
            'hora' => now()->format('H:i'),
            'estado' => 'pendiente',
            'user_id' => $request->user_id,
            'automovil_id' => $request->automovil_id,
            'servicio_id' => $servicio->id,
        ]);

        return redirect()->route('servicios.index')
            ->with('success', 'Servicio creado con cliente y automóvil.');
    }

    public function edit(Servicio $servicio)
    {
        $usuarios = User::all();
        $automoviles = Automovil::all();

        return view('servicios.edit', compact('servicio', 'usuarios', 'automoviles'));
    }

    public function update(Request $request, Servicio $servicio)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'user_id' => 'required|exists:users,id',
            'automovil_id' => 'required|exists:automoviles,id',
        ]);

        // Actualizar datos básicos del servicio
        $servicio->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
        ]);

        // Actualizar el turno asociado (si existe)
        $turno = $servicio->turnos()->first();
        if ($turno) {
            $turno->update([
                'user_id' => $request->user_id,
                'automovil_id' => $request->automovil_id,
            ]);
        }

        return redirect()->route('servicios.index')
            ->with('success', 'Servicio y relación actualizados correctamente.');
    }

    public function destroy(Servicio $servicio)
    { 
        if ($servicio->turnos()->count() > 0) {
            return redirect()->route('servicios.index')
                ->with('error', '⚠️ No puedes eliminar este servicio porque tiene turnos asignados.');
        }

        $servicio->delete();

        return redirect()->route('servicios.index')
            ->with('success', '✅ Servicio eliminado correctamente.');
    }
}
