@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Editar Turno</h1>

    <form action="{{ route('turnos.update', $turno->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-medium">Fecha</label>
            <input type="date" name="fecha" value="{{ $turno->fecha }}" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block font-medium">Hora</label>
            <input type="time" name="hora" value="{{ $turno->hora }}" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block font-medium">Cliente</label>
            <select name="user_id" class="w-full border rounded px-3 py-2" required>
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}" {{ $turno->user_id == $usuario->id ? 'selected' : '' }}>
                        {{ $usuario->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block font-medium">Automóvil</label>
            <select name="automovil_id" class="w-full border rounded px-3 py-2" required>
                @foreach($automoviles as $auto)
                    <option value="{{ $auto->id }}" {{ $turno->automovil_id == $auto->id ? 'selected' : '' }}>
                        {{ $auto->marca }} - {{ $auto->modelo }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block font-medium">Servicio</label>
            <select name="servicio_id" class="w-full border rounded px-3 py-2" required>
                @foreach($servicios as $servicio)
                    <option value="{{ $servicio->id }}" {{ $turno->servicio_id == $servicio->id ? 'selected' : '' }}>
                        {{ $servicio->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">✏ Actualizar</button>
        <a href="{{ route('turnos.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded">⬅ Volver</a>
    </form>
</div>
@endsection
