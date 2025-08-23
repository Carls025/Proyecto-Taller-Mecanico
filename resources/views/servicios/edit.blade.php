@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Editar Servicio</h1>

    <form action="{{ route('servicios.update', $servicio->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-medium">Nombre</label>
            <input type="text" name="nombre" value="{{ $servicio->nombre }}" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block font-medium">Descripción</label>
            <textarea name="descripcion" class="w-full border rounded px-3 py-2">{{ $servicio->descripcion }}</textarea>
        </div>

        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">✏ Actualizar</button>
        <a href="{{ route('servicios.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded">⬅ Volver</a>
    </form>
</div>
@endsection
