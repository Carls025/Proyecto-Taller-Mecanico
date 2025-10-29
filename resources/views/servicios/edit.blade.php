@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">✏ Editar Servicio</h1>

    <form action="{{ route('servicios.update', $servicio->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <!-- Nombre del servicio -->
        <div>
            <label class="block font-medium">Nombre</label>
            <input type="text" name="nombre" value="{{ $servicio->nombre }}" 
                   class="w-full border rounded px-3 py-2" required>
        </div>

        <!-- Descripción -->
        <div>
            <label class="block font-medium">Descripción</label>
            <textarea name="descripcion" class="w-full border rounded px-3 py-2" required>
                {{ $servicio->descripcion }}
            </textarea>
        </div>

        <!-- Cliente -->
        <div>
            <label class="block font-medium">Cliente</label>
            <select name="user_id" class="w-full border rounded px-3 py-2">
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}" 
                        {{ isset($servicio->turnos[0]) && $servicio->turnos[0]->user_id == $usuario->id ? 'selected' : '' }}>
                        {{ $usuario->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Automóvil -->
        <div>
            <label class="block font-medium">Automóvil</label>
            <select name="automovil_id" class="w-full border rounded px-3 py-2">
                @foreach($automoviles as $auto)
                    <option value="{{ $auto->id }}" 
                        {{ isset($servicio->turnos[0]) && $servicio->turnos[0]->automovil_id == $auto->id ? 'selected' : '' }}>
                        {{ $auto->marca }} - {{ $auto->modelo }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Actualizar</button>
        <a href="{{ route('servicios.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded">⬅ Volver</a>
    </form>
</div>
@endsection
