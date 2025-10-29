@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">➕ Agregar Servicio</h1>

    <form action="{{ route('servicios.store') }}" method="POST" class="space-y-4">
        @csrf

        <!-- Nombre -->
        <div>
            <label class="block font-medium">Nombre</label>
            <input type="text" name="nombre" class="w-full border rounded px-3 py-2" required>
        </div>

        <!-- Descripción -->
        <div>
            <label class="block font-medium">Descripción</label>
            <textarea name="descripcion" class="w-full border rounded px-3 py-2"></textarea>
        </div>

        <!-- Cliente -->
        <div>
            <label class="block font-medium">Cliente</label>
            <select name="user_id" class="w-full border rounded px-3 py-2" required>
                <option value="">Seleccione un cliente</option>
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Automóvil -->
        <div>
            <label class="block font-medium">Automóvil</label>
            <select name="automovil_id" class="w-full border rounded px-3 py-2" required>
                <option value="">Seleccione un automóvil</option>
                @foreach($automoviles as $auto)
                    <option value="{{ $auto->id }}">{{ $auto->marca }} - {{ $auto->modelo }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">💾 Guardar</button>
        <a href="{{ route('servicios.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded">⬅ Volver</a>
    </form>
</div>
@endsection
