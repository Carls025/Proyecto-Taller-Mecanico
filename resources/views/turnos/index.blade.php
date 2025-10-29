<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Turnos</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-8">
    @extends('layouts.app')

@section('title', 'Lista de Turnos')

@section('content')
<div class="max-w-6xl mx-auto bg-white shadow-lg rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">📅 Lista de Turnos</h1>

    <div class="flex items-center gap-4 mb-4">
        <a href="{{ url('/') }}" class="text-blue-500 hover:underline inline-block">⬅ Volver al inicio</a>
        <a href="{{ route('turnos.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">➕ Agregar Turno</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full border border-gray-300 text-sm">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2 border">Fecha</th>
                <th class="px-4 py-2 border">Hora</th>
                <th class="px-4 py-2 border">Cliente</th>
                <th class="px-4 py-2 border">Automóvil</th>
                <th class="px-4 py-2 border">Servicio</th>
                <th class="px-4 py-2 border">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($turnos as $turno)
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-2 border">{{ $turno->fecha }}</td>
                <td class="px-4 py-2 border">{{ $turno->hora }}</td>
                <td class="px-4 py-2 border">{{ $turno->user->name ?? 'N/A' }}</td>
                <td class="px-4 py-2 border">{{ $turno->automovil->marca ?? '' }} - {{ $turno->automovil->modelo ?? '' }}</td>
                <td class="px-4 py-2 border">{{ $turno->servicio->nombre ?? '' }}</td>
                <td class="px-4 py-2 border flex space-x-2">
                    <a href="{{ route('turnos.edit', $turno->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">✏ Editar</a>
                    <form action="{{ route('turnos.destroy', $turno->id) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este turno?')" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">🗑 Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

</body>
</html>
