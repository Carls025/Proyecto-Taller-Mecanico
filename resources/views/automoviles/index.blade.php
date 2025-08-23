<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Automóviles</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-lg p-6">
       <h1 class="text-2xl font-bold mb-4">🚘 Lista de Automóviles</h1>

<a href="{{ url('/') }}" class="text-blue-500 hover:underline mb-4 inline-block">⬅ Volver al inicio</a>
       
<a href="{{ route('automoviles.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 mb-4 inline-block">➕ Agregar Automóvil</a>

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
                    <a href="{{ route('automoviles.edit', $auto) }}" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">✏ Editar</a>
                    <form action="{{ route('automoviles.destroy', $auto) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este automóvil?')">
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
