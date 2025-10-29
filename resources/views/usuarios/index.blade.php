<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-8">
@extends('layouts.app')

@section('title', 'Lista de Usuarios')

@section('content')
<div class="max-w-6xl mx-auto bg-white shadow-lg rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">👤 Lista de Usuarios</h1>
    <!-- Aquí tu tabla/listado -->

<a href="{{ url('/') }}" class="text-blue-500 hover:underline mb-4 inline-block">⬅ Volver al inicio</a>

<a href="{{ route('usuarios.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 mb-4 inline-block">➕ Agregar Usuario</a>

<table class="min-w-full border border-gray-300 text-sm">
    <thead class="bg-gray-200">
        <tr>
            <th class="px-4 py-2 border">Nombre</th>
            <th class="px-4 py-2 border">Email</th>
            <th class="px-4 py-2 border">Teléfono</th>
            <th class="px-4 py-2 border">Rol</th>
            <th class="px-4 py-2 border">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-2 border">{{ $usuario->name }}</td>
                <td class="px-4 py-2 border">{{ $usuario->email }}</td>
                <td class="px-4 py-2 border">{{ $usuario->telefono ?? 'N/A' }}</td>
                <td class="px-4 py-2 border">{{ $usuario->rol ?? 'cliente' }}</td>
                <td class="px-4 py-2 border flex space-x-2">
                    <a href="{{ route('usuarios.edit', $usuario) }}" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">✏ Editar</a>
                    <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este usuario?')">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">🗑 Eliminar</button>
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
