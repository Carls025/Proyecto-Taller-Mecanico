@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Agregar Turno</h1>

    <form action="{{ route('turnos.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block font-medium">Fecha</label>
            <input type="date" name="fecha" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block font-medium">Hora</label>
            <input type="time" name="hora" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block font-medium">Cliente</label>
            <select name="user_id" class="w-full border rounded px-3 py-2" required>
                <option value="">-- Seleccionar Cliente --</option>
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block font-medium">Automóvil</label>
            <select name="automovil_id" class="w-full border rounded px-3 py-2" required>
                <option value="">-- Seleccionar Automóvil --</option>
                @foreach($automoviles as $auto)
                    <option value="{{ $auto->id }}">{{ $auto->marca }} - {{ $auto->modelo }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block font-medium">Servicio</label>
            <select name="servicio_id" class="w-full border rounded px-3 py-2" required>
                <option value="">-- Seleccionar Servicio --</option>
                @foreach($servicios as $servicio)
                    <option value="{{ $servicio->id }}">{{ $servicio->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">💾 Guardar</button>
        <a href="{{ route('turnos.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded">⬅ Volver</a>
    </form>
</div>
@endsection
