<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio - Taller Mecánico</title>
    @vite('resources/css/app.css') {{-- Esto carga Tailwind --}}
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-lg text-center">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">🚗 Bienvenido al sistema de turnos</h1>
        <p class="text-gray-600 mb-6">Usá el menú para navegar por las secciones:</p>

        <div class="grid grid-cols-1 gap-4">
            <a href="{{ route('usuarios.index') }}" class="bg-blue-500 text-white py-3 rounded-lg font-semibold hover:bg-blue-600 transition">👤 Usuarios</a>
            <a href="{{ route('servicios.index') }}" class="bg-green-500 text-white py-3 rounded-lg font-semibold hover:bg-green-600 transition">🛠️ Servicios</a>
            <a href="{{ route('automoviles.index') }}" class="bg-yellow-500 text-white py-3 rounded-lg font-semibold hover:bg-yellow-600 transition">🚘 Automóviles</a>
            <a href="{{ route('turnos.index') }}" class="bg-purple-500 text-white py-3 rounded-lg font-semibold hover:bg-purple-600 transition">📅 Turnos</a>
        </div>
    </div>

</body>
</html>
