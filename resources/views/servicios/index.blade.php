<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Servicios</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-lg p-6">
       <h1 class="text-2xl font-bold mb-4">🛠 Lista de Servicios</h1>
<a href="{{ url('/') }}" class="text-blue-500 hover:underline mb-4 inline-block">⬅ Volver al inicio</a>

<a href="{{ route('servicios.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 mb-4 inline-block">➕ Agregar Servicio</a>

<table class="min-w-full border border-gray-300 text-sm">
    <thead class="bg-gray-200">
        <tr>
            <th class="px-4 py-2 border">Nombre</th>
            <th class="px-4 py-2 border">Descripción</th>
            <th class="px-4 py-2 border">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($servicios as $servicio)
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-2 border">{{ $servicio->nombre }}</td>
                <td class="px-4 py-2 border">{{ $servicio->descripcion }}</td>
                <td class="px-4 py-2 border flex space-x-2">
                    <a href="{{ route('servicios.edit', $servicio) }}" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">✏ Editar</a>
                    <form action="{{ route('servicios.destroy', $servicio) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este servicio?')">
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
</body>
</html>
