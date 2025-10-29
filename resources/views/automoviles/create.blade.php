@extends('layouts.app')

@section('title', 'Agregar Automóvil')

@section('content')
<div class="max-w-md mx-auto bg-white shadow-lg rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">➕ Agregar Automóvil</h1>

    {{-- Mensajes de validación --}}
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('automoviles.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block text-gray-700">Marca</label>
            <input type="text" name="marca" value="{{ old('marca') }}" 
                class="w-full border rounded p-2 focus:ring-2 focus:ring-blue-400" required>
        </div>

        <div>
            <label class="block text-gray-700">Modelo</label>
            <input type="text" name="modelo" value="{{ old('modelo') }}" 
                class="w-full border rounded p-2 focus:ring-2 focus:ring-blue-400" required>
        </div>

        <div>
            <label class="block text-gray-700">Año</label>
            <input type="number" name="anio" value="{{ old('anio') }}" 
                class="w-full border rounded p-2 focus:ring-2 focus:ring-blue-400" min="1900" max="2100" required>
        </div>

        <div>
            <label class="block text-gray-700">Patente</label>
            <input type="text" name="patente" value="{{ old('patente') }}" 
                class="w-full border rounded p-2 focus:ring-2 focus:ring-blue-400" required>
        </div>

        <div>
            <label class="block text-gray-700">Propietario</label>
            <select name="user_id" class="w-full border rounded p-2 focus:ring-2 focus:ring-blue-400" required>
                <option value="">Seleccione Propietario</option>
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}" {{ old('user_id') == $usuario->id ? 'selected' : '' }}>
                        {{ $usuario->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="flex justify-between">
            <a href="{{ route('automoviles.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">⬅ Volver</a>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">💾 Guardar</button>
        </div>
    </form>
</div>
@endsection
