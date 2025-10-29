<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Automóviles</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-8">
    @extends('layouts.app')

@section('title', 'Lista de Automóviles')

@section('content')
<div class="max-w-6xl mx-auto bg-white shadow-lg rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">🚘 Lista de Automóviles</h1>

    <div class="flex items-center gap-4 mb-4">
        <a href="{{ url('/') }}" class="text-blue-500 hover:underline inline-block">⬅ Volver al inicio</a>
        <a href="{{ route('automoviles.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">➕ Agregar Automóvil</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full border border-gray-300 text-sm">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2 border">Marca</th>
                <th class="px-4 py-2 border">Modelo</th>
                <th class="px-4 py-2 border">Año</th>
                <th class="px-4 py-2 border">Patente</th>
                <th class="px-4 py-2 border">Propietario</th>
                <th class="px-4 py-2 border">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($automoviles as $auto)
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-2 border">{{ $auto->marca }}</td>
                <td class="px-4 py-2 border">{{ $auto->modelo }}</td>
                <td class="px-4 py-2 border">{{ $auto->anio }}</td>
                <td class="px-4 py-2 border">{{ $auto->patente }}</td>
                <td class="px-4 py-2 border">{{ $auto->user->name ?? 'N/A' }}</td>
                <td class="px-4 py-2 border flex space-x-2">
                    <a href="{{ route('automoviles.edit', $auto->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">✏ Editar</a>
                    <form action="{{ route('automoviles.destroy', $auto->id) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este automóvil?')" class="inline-block">
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
